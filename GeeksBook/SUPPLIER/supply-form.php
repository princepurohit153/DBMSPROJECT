<form action="s_supply.php" method="POST">
      
        <h1>ADD BOOK</h1>
        
        <fieldset>
          <legend><span style="font-family:'Lily Script One', cursive;">Book Info</span></legend>
          <label for="name">Book ID:</label>
          <input type="text" id="name" name="bookid" required>
          
          <label for="name">Author:</label>
          <input type="text" id="name" name="author" pattern="[a-zA-Z\s]{4,20}"  title="Enter properly" required>
          
          <label for="name">Publication:</label>
          <input type="text" id="name" name="publication" pattern="[a-zA-Z\s]{4,40}"  title="Enter properly" required>
          
          <label for="name">Category:</label>
          <input type="text" id="name" name="category" pattern="[a-zA-Z\s]{4,40}"  title="Enter properly" required>
          
          <label for="name">Title:</label>
          <input type="text" id="name" name="title" pattern="[a-zA-Z\s]{4,40}"  title="Enter properly" required>
          
          <label for="name">Price:</label>
          <input type="number" id="name" name="price" pattern="[0-9]{2,20}" title="enter correct price" required>
          
          <label for="name">Quantity:</label>
          <input type="number" id="number" name="qnty" pattern="[0-9]{1,}" title="Enter correctly" required>
          
          <label for="name">Readable</label>
          <input type="checkbox" name="readtag"  title="select tag">       
          <input type="file" name="addbook" id="addbook" >
          
        </fieldset>
        
        <button type="submit">Add It</button>
</form>
