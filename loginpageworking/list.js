function display(){
    fetch('list.php')
    .then(response=>response.json())
    .then(data=>{
        console.log(data)
        if(!data['error']){

            document.getElementById('viewbtn').disabled=true;

            const body=document.body;
            const div=document.createElement('div');
            div.setAttribute('class','container w-2');
            const table=document.createElement('table');
            table.setAttribute('class','table table-striped');
            const thead=`<thead>
                    <tr>
                    <th  scope="col">Key</th>
                    <th  scope="col">Value</th>
                    </tr>
                </thead>`;
            const tbody=document.createElement('tbody');
            body.appendChild(div);
            div.appendChild(table);
            table.insertAdjacentHTML('beforeend',thead);
            table.appendChild(tbody);
            for (let x in data){
                const tr=document.createElement('tr');
                const key=document.createElement('td');
                key.innerText=x;
                const val=document.createElement('td');
                val.innerHTML=data[x];

                tbody.appendChild(tr);
                tr.append(key,val);
            }
        }
        else{

            document.getElementById('viewbtn').disabled=true;

            const body=document.body;
            const h3=document.createElement('h3');
            h3.innerText="You have not completed your Profile";
            const completebtn=document.createElement('a');
            completebtn.innerText="Complete Profile";
            completebtn.setAttribute('class','btn btn-primary');
            completebtn.setAttribute('href','profilesetup.php');

            body.append(h3,completebtn);
        }        
    })
    .catch(err=>{
        console.log(err);
    })
}