<nav>
    <ul>
      <li>
        <a href="../index.php">Accueil</a>
      </li>
      <li>
        <a href="../contact.php">Contact</a>
      </li>
      <li>
        <a href="../packs.php">Packs</a>
      </li>
    </ul>
</nav>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
    html {
      height:100%;
    }
    
    nav {
      max-width: 960px;
      mask-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #ffffff 25%, #ffffff 75%, rgba(255, 255, 255, 0) 100%);
      margin: 0 auto;
      padding: 60px 0;
    }
    
    nav ul {
      text-align: center;
      background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
    }
    
    nav ul li {
      display: inline-block;
    }
    
    nav ul li a {
      padding: 18px;
      font-family: "Open Sans";
      text-transform:uppercase;
      color: red;
      font-size: 18px;
      text-decoration: none;
      display: block;
    }
    
    nav ul li a:hover {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
      background: rgba(255, 255, 255, 0.1);
      color: rgba(0, 35, 122, 0.7);
    }
</style>