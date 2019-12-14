<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <h1>potrpsnja goriva</h1>
      <?php
    

    $potrosnjaGoriva = 7;
    $stanjeURezervaru = 14;
    $ocekivanjaDistanca = 200;

    define('KM','kilometara');
    define('ZAP','litara');
    define('POT','litara na stotinu kilometara');

    $mogucadistanca = $stanjeURezervaru / $potrosnjaGoriva * 100;
    $mogucadistanca = round($mogucadistanca, 2);
echo "stanje:" . $mogucadistanca;

if($mogucadistanca > $ocekivanjaDistanca){
$mogucadistanca = "moze";
}{
    $mogucadistanca= "nemoze";
}
echo "automobil koji ima potrosnju goriva $potrosnjaGoriva" .POT .", s rezervarom od ". ZAP. "litara moze preci $mogucadistanca "

?>

     
    <p>
    auto treba preci <?php echo $ocekivanjaDistanca; ?>/km u rezervaru ima <?php echo $stanjeURezervaru; ?>/L automobil trosi <?php echo $potrosnjaGoriva; ?>/L
    
    
    
    </p>
</body>
</html>