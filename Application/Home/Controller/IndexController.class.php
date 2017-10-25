<?php
namespace Home\Controller;
use Think\Controller;
use ORG\Net;
class IndexController extends Controller
{

    public function visitor_count()
    {
        $visitor = M('visitor_count');
        $data = [];
        if (!cookie('user_ip')){
            $ip = get_client_ip();
            $Ip = new \Org\Net\IpLocation('UTFWry.dat');
            $location_info = $Ip->getlocation($ip);
            $location_info = $location_info['country'] . $location_info['area'];
            $data['ip_location'] = $location_info;
            $data['ip_address'] = $ip;
            header("Content-type: text/html; charset=utf-8");
            cookie('user_ip', $ip, 36000);
            $visitor->add($data);

        }
//        var_dump($visitor->max('visitor_count'));

        return $visitor->max('visitor_count');

         // cookie('user_ip', null);

    }


    public function index($level = 0)
    {


        header("location: http://ali01.marisago.com:8085");
        exit;
        $cond['track_type'] = I('post.track_type');

        if($level){
            $maidata = M('maidata')->where(['level_master' => $level])->select();
            $this->assign('show_level', $level);
        }
        else{
            $maidata = M('maidata')->select();
        }
        foreach($maidata as $t){
            $type[] = $t['track_type'];
            $aaa[$t['track_type']][] = [];//以track_type中的内容为键值初始化一个二位数组
        }

        $type = array_unique($type);
        //建立一个type比对数组
        for ($i = 0; $i < count($type); $i++){
            $typen[$i] = current($type);
            next($type);
        }

        //去掉-1数据
        foreach ($maidata as &$m) {
            foreach ($m as &$n) {
                if ($n == -1) {
                    $n = '';
                }
                if ($n == 'n/a')
                    $n = '';
            }

            //逐个元素与type对比
            $i = 0;
            while ($i < count($typen)){
                if ($m['track_type'] == $typen[$i]){
                    array_unshift($aaa[$typen[$i]] , $m);//从头添加元素
                }
                $i++;
            }
        }

        //删除空元素
        foreach ($typen as $t){
            foreach ($aaa[$t] as $a){
                if (!$a){
                    array_pop($aaa[$t]);
                }
            }
        }

        $this->assign('list', $aaa);
        $this->assign('visitor_count', $this->visitor_count());
        $this->display();

        //$this->ajaxReturn($maidata);
    }

    public function detail($id = 1)
    {
        $maidetail = M('maidata')->find($id);
        foreach ($maidetail as &$m) {
            if ($m == -1 || $m == 'n/a') {
                $m = '';
            }
            if ($m == '0'){
                $m = '';
            }
        }
        $this->assign('data', $maidetail);
        $this->display();
    }

    public function get_res()
    {
        $cond['maidata_id'] = I('post.track_id');
        $modal = M('mai_res');
        $data = $modal->where($cond)->select();
        if ($data) {
            $this->ajaxReturn($data);
        } else {
            $rs['msg'] = -1;
            $this->ajaxReturn($rs);
        }
    }

    public function search()
    {
        $getdata = I('post.words');
        $modal = M('maidata');
        if (preg_match("/^[0-9]{1,3}$/", $getdata)) {
            $cond['mogai_no'] = $getdata;
            $data = $modal->where($cond)->limit(1)->select();
            if ($data) {
                $data[0]['msg'] = 1;
            } else {
                $data[0]['msg'] = -1;
            }
            $this->ajaxReturn($data);
        } else {
            $cond['track_name|track_roma'] = array('like', '%' . $getdata . '%');
            $data = $modal->where($cond)->select();
            if ($data) {
                $data[0]['msg'] = 2;//返回搜索ajax结果
            } else {
                $data[0]['msg'] = -1;
            }
            $this->ajaxReturn($data);
        }
    }

    public function get_video($maidata_id)
    {
        $path = VOL_PATH;

        $cond['maidata_id'] = $maidata_id;
        $res = M('mai_res');
        $data = $res->where($cond)->select();


        if ($data) {
            $out_filename = $data[0]['pumian_file_name'];
            $out_filename = mb_convert_encoding($out_filename, "GBK", "UTF-8");
            $localfile = $path . $out_filename;
            $size = filesize($localfile);
            $start = 0;
            $end = $size - 1;
            $length = $size;
            header("Accept-Ranges: 0-$size");
            header("Content-Type: video/mp4");
            $ranges_arr = array();
            if (isset($_SERVER['HTTP_RANGE'])) {
                if (!preg_match('/^bytes=\d*-\d*(,\d*-\d*)*$/i', $_SERVER['HTTP_RANGE'])) {
                    header('HTTP/1.1 416 Requested Range Not Satisfiable');
                }
                $ranges = explode(',', substr($_SERVER['HTTP_RANGE'], 6));
                foreach ($ranges as $range) {
                    $parts = explode('-', $range);
                    $ranges_arr[] = array($parts[0], $parts[1]);
                }
                $ranges = $ranges_arr[0];
                if ($ranges[0] == '') {
                    if ($ranges[1] != '') {
                        //Range: bytes=-n 表示取文件末尾的n个字节
                        $length = (int)$ranges[1];
                        $start = $size - $length;
                    } else {
                        //Range: bytes=- 这种形式不合法
                        header('HTTP/1.1 416 Requested Range Not Satisfiable');
                    }
                } else {
                    $start = (int)$ranges[0];
                    if ($ranges[1] != '') {
                        //Range: bytes=n-m 表示从文件的n偏移量读到m偏移量
                        $end = (int)$ranges[1];
                    }
                    //Range: bytes=n- 表示从文件的n偏移量读到末尾
                    $length = $end - $start + 1;
                }
                header('HTTP/1.1 206 PARTIAL CONTENT');
            }
            header("Content-Range: bytes {$start}-{$end}/{$size}");
            header("Content-Length: $length");
            $buffer = 8096;
            $file = fopen($localfile, 'rb');
            if ($file) {
                fseek($file, $start);
                while (!feof($file) && ($p = ftell($file)) <= $end) {
                    if ($p + $buffer > $end) {
                        $buffer = $end - $p + 1;
                    }
                    set_time_limit(0);
                    echo fread($file, $buffer);
                    flush();
                }
                fclose($file);
            }
        }
        else{
            echo "no this res";
        }
    }

    public function download_video($maidata_id)
    {
        $path = VOL_PATH;

        $cond['maidata_id'] = $maidata_id;
        $res = M('mai_res');
        $data = $res->where($cond)->select();
        $filename = M('maidata')->where(['id' => $data[0]['maidata_id']])->select()[0]['track_name'].".mp4";

        if ($data) {
            $out_filename = $data[0]['pumian_file_name'];
            //if file name is gbk encoding:
            //$out_filename = mb_convert_encoding($out_filename, "GBK", "UTF-8");
            $localfile = $path . $out_filename;
            $size = filesize($localfile);
            header('Accept-Ranges: bytes');
            header('Accept-Length: ' . filesize($localfile));
            // It will be called
            header('Content-Transfer-Encoding: binary');
            header('Content-type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . $filename);
            header('Content-Type: application/octet-stream; name=' . $filename); //重命名文件
            if (is_file($localfile) && is_readable($localfile)) {
                $file = fopen($localfile, "r");
                echo fread($file, $size);
                fclose($file);
            }
            exit;
        }
        else{
            echo "no this res";
        }
    }


    public function manual_upload()
    {
        $path = VOL_PATH;

        if (UPLOAD_DEBUG){
            if (!empty($_FILES)) {

                //得到上传的临时文件流
                $tempFile = $_FILES['Filedata']['tmp_name'];


                //得到文件原名
                $fileN = $_FILES["Filedata"]["name"];
                $fileName = $fileN;
                //$fileName = mb_convert_encoding($fileN, "UTF-8", "UTF-8");


                //最后保存服务器地址
                if(!is_dir($path))
                    mkdir($path);
                if (move_uploaded_file($tempFile, $path.$fileName)){
                    echo 1;
                }else{
                    $dump[0] = $_FILES;
                    $dump[1] = $fileName;
                    $dump[2] = $path.$fileName;
                    var_dump($dump);
                }
            }
        }

        else{
            echo "upload debug is off";
        }

    }

    public function uploads()
    {
        if (UPLOAD_DEBUG){
            $this->display();
        }
        else{
            echo "upload debug is off";
        }
    }

}