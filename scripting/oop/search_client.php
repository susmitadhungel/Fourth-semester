<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Autocomplete</title>
</head>
<body>
    <input type="text" id="search" placeholder="search Students">

    <h3>Student List</h3>
    <ul id="studentList">
    </ul>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script>

        $('#search').keyup();(function(e){
            let name = e.target.value;
            $.ajax({
            method: 'GET',
            url: 'search_server.php?name='+ name,
            success: function(data){
                data = JSON.parse(data);

                let listData = "";
                for (let item of data){
                    listData += "<li>"+ item.Name + "</li>"
                }
                $('#studentList').html(listData);
                o0 
            }
        })
        });

        

        // let studentListElement = document.getElementById('studentList'); 
        // let searchInput = document.getElementById('search');
        
        // searchInput.addEventListener('keyup',function(e){
        //     let name = e.target.value;

        //     let request = new XMLHttpRequest();
        // request.open("GET","Search_server.php?name=" + name );
        // request.send();

        // request.onreadystatechange = function () {
        //     if(request.readyState == 4){
        //     if(request.status == 200){
        //         let data = request.responseText;
        //         data = JSON.parse(data);

        //         let listData = "";
        //         for (let item of data){
        //             listData += "<li>"+ item.Name + "</li>"
        //         }
        //         studentListElement.innerHTML = listData;
        //     }else {
        //         console.error("Error Occured");
        //     }
        //     }
        // } 
        // });
</script>

</body>
</html>