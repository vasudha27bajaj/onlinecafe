
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    function item1()
    {
        var a = document.getElementById("demo").value;
        window.alert(a);
    }
    </script>
	<style>
    body{
	background-color: aliceblue;
}
nav ul {
    margin: 0;
    padding: 5px;
    background-color: #141e1c;
}

nav ul li {
    display: inline;
    color: rgb(255,255,255);
    margin: 13px;
}
        
a.float
        {
            color: white;
            text-decoration: none;
            font-size: 22px;
        }
        .logo
        {
            margin-right: 40%;
        }
   a.float:hover
        {
            color: #CF273E;
        }
        .button
        {
{
    background-color: rgba(25,48,49,0.5);
    background-repeat:no-repeat;
    border: 1px solid white;
    cursor:pointer;
    overflow: hidden; 
    color: white;
}


    </style>
	<title></title>
</head>
<body>
<nav>
<ul>
 <li><img class="logo" src="images/download%20(1).png" width="180" height="90" alt=""></li>
  <li><a class="float" href="">ABOUT</a></li>
  <li><a class="float" href="front.php">HOME</a></li>
  <li><a class="float" href="menu.php">MENU</a></li>
  <li><a class="float" href="">CONTACT</a></li>
  
</ul>
</nav>
<div class="container">      
  <table class="table">
    <thead>
      <tr>
       <th></th>
        <th>BREAKFAST </th>
        <th>PRICE</th>
        <th></th>
        <th>QUANTITY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td>01</td>
        <td>Eggs</td>
        <td>250/-</td>
        <th><button onclick="item1()">ADD</button></th>
        <th><form>
  <input id="demo" type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
        <td>02</td>
        <td>Cheesy Nachos</td>
        <td>260/-</td>
        <th><button>ADD</button></th>
        <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>03</td>
          <td>Potato Wedges</td>
          <td>240/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>04</td>
          <td>Garlic Bread</td>
          <td>180/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>05</td>
          <td>Soup of the Day </td>
          <td>210/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
    </tbody>
  </table>
</div>
<div class="container">      
  <table class="table">
    <thead>
      <tr>
       <th></th>
        <th>MAIN COURSE</th>
        <th>PRICE</th>
        <th></th>
        <th>QUANTITY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>06</td>
        <td>Alfredo Pasta</td>
        <td>330/-</td>
        <th><button>ADD</button></th>
        <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
        <td>07</td>
        <td>Pesto Pasta</td>
        <td>350/-</td>
        <th><button>ADD</button></th>
        <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>08</td>
          <td>Grilled Veggies</td>
          <td>290/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>09</td>
          <td>Crispy Wrap</td>
          <td>350/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>10</td>
          <td>BLT Sandwich</td>
          <td>340/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
    </tbody>
  </table>
</div>
<div class="container">      
  <table class="table">
    <thead>
      <tr>
       <th></th>
        <th>DRINKS</th>
        <th>PRICE</th>
        <th></th>
        <th>QUANTITY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>11</td>
        <td>Lemon Iced Tea</td>
        <td>155/-</td>
        <th><button>ADD</button></th>
        <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
        <td>12</td>
        <td>Mint Mohito</td>
        <td>175/-</td>
        <th><button>ADD</button></th>
        <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>13</td>
          <td>Hot Chocolate</td>
          <td>170/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>14</td>
          <td>Nutella Shake </td>
          <td>200/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>15</td>
          <td>Rose Lemonade</td>
          <td>160/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
    </tbody>
  </table>
</div>
<div class="container">      
  <table class="table">
    <thead>
      <tr>
       <th></th>
        <th>DESSERTS</th>
        <th>PRICE</th>
        <th></th>
        <th>QUANTITY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>16</td>
        <td>Pancakes</td>
        <td>225/-</td>
        <th><button>ADD</button></th>
        <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
        <td>17</td>
        <td>Choco Donut</td>
        <td>250/-</td>
        <th><button>ADD</button></th>
        <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>18</td>
          <td>Jar-Red Velvet</td>
          <td>160/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>19</td>
          <td>Sizzling Brownie</td>
          <td>195/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
      <tr>
          <td>20</td>
          <td>Caramel Custard</td>
          <td>150/-</td>
          <th><button>ADD</button></th>
          <th><form>
  <input type="number" value="1" name="quantity" min="1" max="10">
</form></th>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>