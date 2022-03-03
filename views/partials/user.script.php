<script>
    let searchFiled = document.querySelector('#one');
    let mainBody = document.querySelector('#mainbody');
    let mainFooter = document.querySelector('#mainfoot');
    let allBtns = document.querySelectorAll('[data-email]');

    allBtns.forEach(moreInfo => {
        moreInfo.addEventListener('click', function(){
         let email = this.getAttribute('data-email');
         let fakeForm = new FormData();
         fakeForm.append("user_email",email);
         let xml = new XMLHttpRequest();
         xml.open('POST', 'api.php');
         xml.onreadystatechange = function(){
             if(xml.readyState === 4 && xml.status === 200){
                 displayData(JSON.parse(xml.responseText));
             }
            }          
         xml.send(fakeForm);     
        })
    })

    searchFiled.addEventListener('input', function(){
     if (this.value.length > 2) {
         let term = this.value;
         let fakeForm = new FormData();
         fakeForm.append("email",term);
         let xml = new XMLHttpRequest();
         xml.open('POST', 'api.php');
         xml.onreadystatechange = function(){
             if(xml.readyState === 4 && xml.status === 200){
                 displayData(JSON.parse(xml.responseText));
             }
         }                    
         xml.send(fakeForm);       
     }
     else if(this.value.length === 0){
     let term = this.value;
         let fakeForm = new FormData();
         fakeForm.append("all",term);
         let xml = new XMLHttpRequest();
         xml.open('POST', 'api.php');
         xml.onreadystatechange = function(){
             if(xml.readyState === 4 && xml.status === 200){
                 displayData(JSON.parse(xml.responseText));
                // console.log(JSON.parse(xml.responseText));
             }
         }                    
         xml.send(fakeForm);
        }
    });
       
     function displayData(data){
        let text = '';
         let zbir = 0;
          data.forEach((platenik, index) => {
              zbir += +platenik.suma;
              text += `
               <tr>
               <td>${index+1}</td>
               <td>${platenik.email}</td>
               <td>${platenik.suma}</td>
               <td>${platenik.created_at}</td>
               </tr>
              `
          });
          mainBody.innerHTML = text;
          mainFooter.innerHTML = zbir;
    
     }
 
</script>