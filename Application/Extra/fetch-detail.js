//图片采集
var roomInfoObj = {};
var roomImageList = [];

$('.lof-main-wapper img').each(
    function(index, value){
        roomImageList.push($(value).attr('src'));
    }
);
roomInfoObj.roomImageList = roomImageList;

//房源描述
var descriptionList = [];
$('.aboutRoom p').each(
    function(index, value) {
        descriptionList.push($(value).text());
    }
);
roomInfoObj.descriptionList = descriptionList;

//房屋配置
var configList = [];
$('.configuration .have').each(
    function(index, value ) {
        configList.push($(value).text());
    }
);
roomInfoObj.configList = configList;

//价格信息
$roomDetail = $('.room_detail_right');
roomInfoObj.detail = {
    name : $roomDetail.find('.room_name h2').text(),
    area : $roomDetail.find('.pr').text(),
    price : $roomDetail.find('.price .room_price').text()
};
//标签列表
var roomTagList = [];
$roomDetail.find('.room_tags span').each(
    function(index, value){
        roomTagList.push($(value).text());
    }
);
roomInfoObj.detail.tags = roomTagList;

//房源详情
var roomDetailList = [];
$roomDetail.find('.detail_room li').each(
    function(index, value){
        roomDetailList.push($(value).text());
    }
);
roomInfoObj.detail.detail = roomDetailList;
console.log(JSON.stringify(roomInfoObj));

