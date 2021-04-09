function dispaly_form() {
    var products = document.getElementById("products").value;
    if(products == "cars"){
      document.getElementById('cars_d').style.display = "block";
      document.getElementById('vichles_d').style.display = "none";
      document.getElementById('jewl_d').style.display = "none";
      document.getElementById('builds_d').style.display = "none";
      document.getElementById('high_d').style.display = "none";
      
    }
    else  if(products == "vichles"){
      document.getElementById('cars_d').style.display = "none";
      document.getElementById('vichles_d').style.display = "block";
      document.getElementById('jewl_d').style.display = "none";
      document.getElementById('builds_d').style.display = "none";
      document.getElementById('high_d').style.display = "none";
      
    }
    else  if(products == "jewl"){
      document.getElementById('cars_d').style.display = "none";
      document.getElementById('vichles_d').style.display = "none";
      document.getElementById('jewl_d').style.display = "block";
      document.getElementById('builds_d').style.display = "none";
      document.getElementById('high_d').style.display = "none";
     
    }
    else  if(products == "build"){
      document.getElementById('cars_d').style.display = "none";
      document.getElementById('vichles_d').style.display = "none";
      document.getElementById('jewl_d').style.display = "none";
      document.getElementById('builds_d').style.display = "block";
      document.getElementById('high_d').style.display = "none";
     
    }
    else  if(products == "high"){
      document.getElementById('cars_d').style.display = "none";
      document.getElementById('vichles_d').style.display = "none";
      document.getElementById('jewl_d').style.display = "none";
      document.getElementById('builds_d').style.display = "none";
      document.getElementById('high_d').style.display = "block";
     
    }
    else{
      document.getElementById('cars_d').style.display = "none";
      document.getElementById('vichles_d').style.display = "none";
      document.getElementById('jewl_d').style.display = "none";
      document.getElementById('builds_d').style.display = "none";
      document.getElementById('high_d').style.display = "none";
    }
  }