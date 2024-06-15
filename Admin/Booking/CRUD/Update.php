<?php   
include_once("Read.php");

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
    </head>
    <body>
         <Fieldset>
        <legend>
            <h2>Update</h2>
        </legend>
        <form action="./updateHandle.php" method="post" enctype="multipart/form-data">
            <label for="title">Title</label>
            <input type="text" name="title" id="title"><br><br>
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date" id="release_date"><br><br>
            <label for="category">Category</label>
            <input type="text" name="category" id="category"><br><br>
            <label for="runtime">Run Time</label>
            <input type="time" name="runtime" id="runtime"><br><br>
            <label for="cost">Cost</label>
            <input type="text" name="cost" id="cost"><br><br>
            <label for="country">Country</label>
            <input type="text" name="country" id="country"><br><br>
           
            <input type="submit" name="submit" value="Update">
           </form>
    </Fieldset>
   
     <script>
    const rows = document.querySelector('#tbl').querySelectorAll('tr');

    const Id =document.querySelector("[name='id']");
    const Title =document.querySelector("[name='title']");
    const Release_date =document.querySelector("[name='release_date']");
    const Catagory =document.querySelector("[name='category']");
    const Run_time =document.querySelector("[name='runtime']");
    const Cost =document.querySelector("[name='cost']");
    const Country =document.querySelector("[name='country']");
    
    
    
    rows.forEach((row) => {
       
      row.addEventListener('click', (event) => {

        const id = row.getElementsByTagName('td')[0].innerHTML;
        Id.value=id;
        const title =row.getElementsByTagName('td')[1].innerHTML;
        Title.value=title;
        const release_date =row.getElementsByTagName('td')[2].innerHTML;
        Release_date.value=release_date;
        const category =row.getElementsByTagName('td')[3].innerHTML;
        Catagory.value=category;
        const runtime =row.getElementsByTagName('td')[4].innerHTML;
        Run_time.value=runtime;
       
        const cost =row.getElementsByTagName('td')[5].innerHTML;
        Cost.value=cost;
        const country =row.getElementsByTagName('td')[6].innerHTML;
        Country.value=country;
        const image =row.getElementsByTagName('td')[7].innerHTML;
        Image.files=DataTransfer.image.files;
         
        const trailer =row.getElementsByTagName('td')[8].innerHTML;
        video.value=trailer;
               
            });


    });
   
</script>  
    </body>
    </html>
  