<?php
namespace Home\Controller;
use Think\Controller;
import("Vendor.simple_html_dom.simple_html_dom");

class IndexController extends Controller {
    public function index(){

        $urlListStr = '["/z/vr/60023149.html","/z/vr/307729.html","/z/vr/20036075.html","/z/vr/60071294.html","/z/vr/60092565.html","/z/vr/20009979.html","/z/vr/20032026.html","/z/vr/20038463.html","/z/vr/20040012.html","/z/vr/323685.html","/z/vr/20001828.html","/z/vr/60109361.html","/z/vr/60076057.html","/z/vr/60084734.html","/z/vr/60158814.html","/z/vr/60122139.html","/z/vr/60175131.html","/z/vr/317928.html","/z/vr/60163029.html","/z/vr/60120913.html"]';
        $urlList = json_decode($urlListStr);
//        $this->ajaxReturn($urlList);



        $html = file_get_html('http://sh.ziroom.com/z/vr/60023149.html');
        $imgList = $html->find('.room_detail_left');

        $this->ajaxReturn($imgList);

//        foreach($html->find('a') as $e) {
//            echo $e->href .'<br>';
//        }

//        $url = 'http://www.xxx.com/car.php';

//        $result = $html->find(".t_mainbox");
//        echo sizeof($result);
//        foreach ($html->find('#houseList') as $ul) {
////            foreach($ul->find('.more') as $more) {
////                echo $more;
////            }
//            echo $ul;
//        }
//        echo $result;
//        echo sizeof($result);
//        foreach($html->find('#houseList') as $houseList){
//            echo '2';
////            foreach($houseList->find('.more') as $li) {
//////                echo $li->href . '<br>';
////                echo '1';
////            }
//        }


    }
}