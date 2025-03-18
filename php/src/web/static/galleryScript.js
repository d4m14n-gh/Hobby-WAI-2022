function Save(){
    let b=document.getElementsByName("imgcheck");
    let selected=[];
    let unselected=[];
    for(let i=0;i<b.length;i++){
        if(b[i].checked)
            selected.push(b[i].id);
        else
            unselected.push(b[i].id)
    }
    $.ajax({
        url: "saveSelected",
        method: "post",
        data: {
            selected: JSON.stringify(selected),
            unselected: JSON.stringify(unselected)
        }
    }).done(res=>{console.log(res);});
}
let lastV="";
window.onload = imgFind;
function imgFind(){
    if(document.getElementById('tt')===null)
        return;
    let container=document.getElementById('img-container');
    $.ajax({
        url: 'find',
        method: 'post',
        data: {
            tfind: document.getElementById('tt').value
        }
    }).done(res =>{
         if(lastV!==res){
            lastV=res;
            container.innerHTML=res;
        }
    });
}

