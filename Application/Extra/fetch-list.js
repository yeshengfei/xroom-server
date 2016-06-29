var urlList = [];
$('#houseList .more a').each(
    function(index, value){
        urlList.push($(value).attr('href'))
    }
);
var urlStr = JSON.stringify(urlList);
console.log(urlStr);