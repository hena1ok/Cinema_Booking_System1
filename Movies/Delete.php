

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
   <link rel="stylesheet" href="../../Styles/stylesSignup.css">
        
      
        
        <title>Delete</title>
    </head>
    <body>
        <?php
 include("../Add/crudhead.php");
?>
    <Fieldset>
        <legend>
            <h2>Delete</h2>
        </legend>
        <form action="deletehandle.php" method="post">
        <div class="form-group">
            <label for="id">ID</label>
             <input type="text" name="id" id="id">
        </div>   
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        
         <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date" id="release_date">
           
        </div> 
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" id="category">
        </div> 
        <div class="form-group">
           <label for="runtime">Run Time</label>
            <input type="time" name="runtime" id="runtime">
        </div> 
       
         <div class="form-group">
           <label for="country">Country</label>
            <input type="text" name="country" id="country">
        </div>
         <div class="form-group">
            <input type="submit" class="btn" name="delete" value="Delete">
        </div> 
           
           

           
           </form>
    </Fieldset>
    <?php

 include("Read.php");
?>
 <?php include("../Add/footer.php"); ?>

 <script>
    const rows = document.querySelector('#tbl').querySelectorAll('tr');

    const Id =document.querySelector("[name='id']");
    const Title =document.querySelector("[name='title']");
    const Release_date =document.querySelector("[name='release_date']");
    const Catagory =document.querySelector("[name='category']");
    const Run_time =document.querySelector("[name='runtime']");
    const Country =document.querySelector("[name='country']");
    const Image =document.querySelector("[name='image']");
    const video =document.querySelector("[name='video']");
    
    
    
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
        const country =row.getElementsByTagName('td')[5].innerHTML;
        Country.value=country;
        const image =row.getElementsByTagName('td')[6].innerHTML;
        Image.files=DataTransfer.image.files;
         
        const trailer =row.getElementsByTagName('td')[7].innerHTML;
        video.value=trailer;
               
            });


    });
   
</script>  
<script src="../JS/main.js"></script>

    </body>
    </html>
    