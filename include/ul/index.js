var oUl=document.getElementById('ul');
var aTitle=oUl.getElementsByTagName('a');
var aUl=oUl.getElementsByTagName('ul');
var aLi=null;
var arrLi=[];
//绑定标题栏的东西
for(var i=0;i<aTitle.length;i++){
    aTitle[i].index=i;
    aTitle[i].onclick=function () {
        if(this.className=='title'){
            this.className +=' active';
            aUl[this.index].className='open';
        }else{
            this.className='title';
            aUl[this.index].className='';
        }
        //所有其他的分组关闭
        // for(var j=0;j<aTitle.length;j++){
        //     if(j !=this.index){
        //         aUl[j].className='';
        //         aTitle[j].className='title';
        //     }
        // }
    };
}
//将全部的内层Li放到arrLi
for(var i=0;i<aUl.length;i++){
    aLi=aUl[i].getElementsByTagName('li');//每个分组的Li
    for(var j=0;j<aLi.length;j++){
        arrLi.push(aLi[j]);
    }
}
//给所有的内层Li绑定事件
for(var i=0;i<arrLi.length;i++){
    arrLi[i].onclick=function () {
        for(var j=0;j<arrLi.length;j++){
            arrLi[j].className='';
        }
        this.className='active';
    }
}