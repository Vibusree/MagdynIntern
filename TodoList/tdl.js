let add=document.getElementById('add');
let list=document.getElementById('lower');

add.addEventListener('click',()=>{
    let input=document.getElementById('input');
    let inputval=input.value;
    input.value="";
    addtask(inputval);
})

function addtask(input){
    if(input!="") {
        const div=document.createElement('div');
        div.id="task";

        const txt=document.createElement('p');
        txt.id="para";

        const update=document.createElement('input');
        const finish=document.createElement('input');
        const del=document.createElement('input');
        update.id='ubtn';
        finish.id='fbtn';
        del.id='dbtn';
        update.type='button';
        finish.type='button';
        del.type='button';
        update.value='update';
        finish.value='finish';
        del.value='delete';

        list.appendChild(div);
        txt.innerText=input;
        div.append(txt,update,finish,del);

        update.addEventListener('click',()=>{
            let newtxt=prompt("Update Task");
            if(newtxt){
                txt.innerText=newtxt;
                txt.removeAttribute('style','text-decoration:line-through;');
            }
        })
        finish.addEventListener('click',()=>{
            txt.setAttribute('style','text-decoration:line-through;');
        })
        del.addEventListener('click',()=>{
            if(confirm("Do you want to delete the task?"))
            del.parentElement.remove();
        })

        // const row=`<div id="task">
        //         <p id="para">${input}</p>
        //         <button
        //         <button>Finish</button>
        //         <button>Delete</button>
        //     </div>`;
        // list.insertAdjacentHTML('beforeend',row);
    }
}