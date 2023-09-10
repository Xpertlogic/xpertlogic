<meta charset="utf-8">
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = end($components);
?>
<title>
<?php
switch ($first_part) {
    case "index.php":
        echo "Xpert Logic | IT Solutions for Streamlined Business Operations";
        break;
    case "about.php":
        echo "Who we are - Xpert Logic";
        break;
    case "service.php":
        echo "Our services - Xpert Logic";
        break; 
    case "project.php":
        echo "Our clients - Xpert Logic";
        break;
    case "contact.php":
        echo "Talk to use - Xpert Logic";
        break;
  default:
    echo "Xpert Logic Digital";
}
?>

</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="XpertLogic offers cutting-edge IT solutions to optimize your business processes. Our experts deliver tailored software and tech support for seamless operations. Contact us today!">
<meta name="keywords" content="IT solutions, Software development, Tech support, Business optimization, Cloud computing, Cybersecurity, Data analytics">
<!-- Favicon -->
<link href="img/favicon.png" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C7JP5FGWV8"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C7JP5FGWV8');
</script>