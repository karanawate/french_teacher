create teacher profile and update filed adhar card name phone etc. and it should be  ajax 
route should be sesessbile
student delete but not acctual delete in database the deleted_at time stamp field updated 



<script>
        const myform = document.getElementById("profileform")
        myform.addEventListener("submit",(e) => {
            e.preventDefault();
            var name = document.getElementById('name').value;
            var phone_number = document.getElementById('phone_number').value;
            var address = document.getElementById('address').value;
            var phonetic_name = document.getElementById('phonetic_name').value;
            var nickname = document.getElementById('nickname').value;
            var userid = document.getElementById('userid').value;
            var position = document.getElementById('position').value;
            try {
                    axios({
                        method:'post',
                        url:'/api/profileupdate',
                        data: {
                            name:name,
                            userid:userid,
                            phone_number:phone_number,
                            address:address,
                            phonetic_name:phonetic_name,
                            nickname:nickname,
                            position:position,
                        },
                    }).then(function (response){
                        console.log(response);
                        alert("sucefully updated");
                    });
            } catch (error) {
                console.log(error);
            }
        })
    </script>

error: function(error) {
         console.log(error);
        }



        $('#profileform').submit(function(e){
        e.preventDefault();
    $('#profileform').submit(function(event){
        event.preventDefault();
        var userid = $('#userid').val();
        var name = $('#name').val();
        var phone_number = $('#phone_number').val();
        var position = $('#position').val();
        var address = $('#address').val();
        var nickname = $('#nickname').val();
        var phonetic_name = $('#phonetic_name').val();
        $.ajax({
            type:'POST',
            url:'/api/profileupdate',
            data:{
                userid:userid,
                name:name,
                phone_number:phone_number
                phone_number:phone_number,
                position:position,
                address:address,
                phonetic_name:phonetic_name,
                nickname:nickname
            },
            success: function(data){
                console.log(data);
            },error: function(error)
            {
                console.log(error);
            }