<?php
session_start();
if (!isset($_SESSION['email'])) {
     // Redireciona para a página de login se não estiver logado
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <title>Bem-vindo</title>
</head>
<body>
    
    
    <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .header {
            justify-items: center;
            text-align: center;
            align-items: center;
            padding: 10px 2px;
            border-bottom: 1px solid #e0e0e0;
        }
        .header input {
            width: 300px;
            padding: 8px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }
        .header .icons {
            display: flex;
            align-items: center;
        }
        .header .icons i {
            margin-left: 20px;
            font-size: 20px;
            color: #333;
        }
        .nav {
            display: flex;
            justify-content: center;
            padding: 10px 0;
            background-color: #f8f8f8;
            border-bottom: 1px solid #e0e0e0;
        }
        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }
        .filters {
            display: flex;
            justify-content: center;
            padding: 10px 0;
            background-color: #fff;
            border-bottom: 1px solid #e0e0e0;
        }
        .filters div {
            margin: 0 10px;
            position: relative;
        }
        .filters div:after {
            content: '\f0d7';
            font-family: 'FontAwesome';
            position: absolute;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
        }
        .filters div span {
            cursor: pointer;
        }
        .product-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
        }
        .product {
            width: 220px;
            margin: 4px;
            border: 1px solid #ffffff;
            border-radius: 4px;
            overflow: hidden;
            text-align: center;
        }
        .product img {
            display: flex;
            width: 100%;

        }
        .product .details {
            padding: 10px;
        }
        .product .details .price {
            font-size: 18px;
            font-weight: 700;
            color: #333;
        }
        .product .details .description {
            font-size: 15px;
            color: #666;
            margin: 10px 0;
        }
        .contato{
        
        display: flex;
        position: absolute;
        right: 0px;
        top: -20px;
    
    }
    .ro{
  
  width: 100pc;
  height: 30px ;
  color: red;
  font-size: 25px;


}
.mo{
  width: 150px;
  height: 100%;
  color: black;
  font-size: 18px;
  display: flex;
}
.final{
                display: flex;
                border: 45px solid black;
                border-color: #ffffff;
                font-weight: 50;
                border-radius: 10px;
                padding: 1px 1;
                background-color: #ffffff;
                height: 20px;
  
                                                                
        }
        .sair{
                display: flex;
                position: absolute;
                left: 900px;
                height: 10px;
                cursor: pointer;
                transition: background-color 0.3s;
                width: 150px;
                font-size: 20px;
            
            }   
            footer{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1px 0;
        color: black;
    
    
    }
       
  </style>
 </head>
 <body>
    <div class="ro">
        <p>ROSANGELA VAZ</p>
    </div>
    <div class="mo">
        <p>Moda Feminina</p>
    </div>
    <div class="perfil"></div>
    <div class="icon-perfil"></div>
    <div class="re-perfil"></div>
  <header class="header">
   <input placeholder="O que você está procurando?" type="text"/>
   <div class="icons">
    <i class="fas fa-map-marker-alt">
    </i>
    <i class="fas fa-user">
    </i>
    <i class="fas fa-heart">
    </i>
    <i class="fas fa-shopping-bag">
    </i>
   </div>
   <div class="contato" >
    <li>
        <a href="https://www.instagram.com/rosangelavazmodafeminina/" target="_blank" rel="noopener noreferrer">
            <i class="ic-instagram ReactIcon_linkBadgeIconShape__xICbL"></i>
            
            <div class="ReactIcon_linkBadgeIcon__AmutG">
                <img src="C:\Users\monke\OneDrive\Pictures\instagram-logo_1199-122.avif" alt="png instagram" height="50px" width="50px">
            </div>
        </a>
    </li>
</div>
  </header>
  <nav class="nav">
    <a href="welcome.php">
        INICIO
         </a>
    <a href="saia.php">
     SAIA
    </a>
    <a href="vestido.php">
     VESTIDOS
    </a>
    <a href="calças.php">
     CALÇAS
    </a>
    <a href="blusas.php">
     BLUSAS
    </a>
    <a href="cropped.php">
     CROPPED
    </a>
    <a href="calçados.php">
     CALÇADOS
    </a>
    <a href="acessorios.php">
     ACESSÓRIOS
    </a>
   
    
   </nav>

  <div class="product-list">
    <div class="product">
     <img alt=" SweatyRocks Saia feminina com cintura elástica" height="300" src="https://m.media-amazon.com/images/I/51Qca2lyY8L._AC_.jpg" width="220"/>
     <div class="details">
      <div class="description">
        SweatyRocks Saia feminina com cintura elástica
      </div>
      <div class="price">
        R$ 362,20
         </div>
     </div>
    </div>


    <div class="product">
     <img alt=" Saia Feminina Envelope Casual Lisa Transpassada " height="300" src="https://acdn.mitiendanube.com/stores/001/711/918/products/2-cd76e5856dd582a75617214935103333-1024-1024.png" width="220"/>
     <div class="details">
      <div class="description">                                           
        Saia Feminina Envelope Casual Lisa Transpassada
      </div>
      <div class="price">
        R$ 139,99
         </div>
     </div>
    </div>


    <div class="product">
     <img alt=" Saia Longa Feminina Abertura na Frente Bege" height="300" src="https://cdn.awsli.com.br/2500x2500/868/868822/produto/262989359/saia-longa-bege-com-abertura-na-frente-anagrom-ref-240-tgvtn1qzct.jpg" width="200"/>
     <div class="details">
      <div class="description">
        Saia Longa Feminina Abertura na Frente Bege
      </div>
      <div class="price">
        R$ 82,90
         </div>
     </div>
    </div>


    <div class="product">
     <img alt=" Saia Feminina Jeans Curta Jade" height="300" src="https://acdn.mitiendanube.com/stores/003/079/594/products/3055-saia-feminina-jeans-curta-jade-1-523ce91f060de2841b17090706101323-480-0.jpg" width="220"/>
     <div class="details">
      <div class="description">
        Saia Feminina Jeans Curta Jade
      </div>
      <div class="price">
        R$ 720,00
         </div>
      </div>
     </div>
    </div>



  <div class="product-list">
    <div class="product">
     <img alt="Saia Feminina Plissada Midi" height="300" src="https://cdn.awsli.com.br/1000x1000/1538/1538522/produto/69781948/whatsapp-image-2024-03-22-at-10-39-28-k0h96crq74.jpeg" width="220"/>
     <div class="details">
      <div class="description">
        Saia Feminina Plissada Midi
      </div>
      <div class="price">
        R$ 54,99
         </div>
     </div>
    </div>


    <div class="product">
     <img alt=" Saia Midi Feminina Alfaiataria" height="300" src="https://fernandaramosstore.com.br/wp-content/uploads/2024/08/fernandaramosstore_com_br-saia-midi-feminina-alfaiataria-heloisa-com-cinto-cinza-585x700.jpeg" width="220"/>
     <div class="details">
      <div class="description">                                           
        Saia Midi Feminina Alfaiataria
      </div>
      <div class="price">
        R$ 129,90
         </div>
     </div>
    </div>


    <div class="product">
     <img alt=" Saia Jeans Feminina Juvenil " height="300" src="https://static.ferju.com.br/public/ferju/imagens/produtos/saia-jeans-feminina-juvenil-detalhe-rasgos-e-botoes-18-20-010597b-biliton-11349.jpg" width="200"/>
     <div class="details">
      <div class="description">
        Saia Jeans Feminina Juvenil
      </div>
      <div class="price">
        R$ 109,90
         </div>
     </div>
    </div>


    <div class="product">
     <img alt=" Saia Feminina Alfaiataria Preta" height="300" src="https://i0.wp.com/crispimstore.com.br/wp-content/uploads/2023/03/SAIA-FEMININA-TECIDO-CURTA-MODA-LOJA-SITE-ONLINE-VESTUARIO-1_1-scaled.webp?fit=1920%2C2560&ssl=1" width="220"/>
     <div class="details">
      <div class="description">
        Saia Feminina Alfaiataria Preta
      </div>
      <div class="price">
        R$ 159,90
         </div>
      </div>
     </div>
    </div>


    <div class="product-list">
        <div class="product">
         <img alt="Saia Feminina com Botões, com Cinto" height="300" src="https://down-br.img.susercontent.com/file/73a03bf19d1a87388eaf16af8b04c58f" width="220"/>
         <div class="details">
          <div class="description">
            Saia Feminina com Botões, com Cinto
          </div>
          <div class="price">
            R$ 69,99
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Saia Feminina com Babado Estampado" height="300" src="https://images.tcdn.com.br/img/img_prod/1280748/saia_babado_estampado_moda_evangelica_feminino_promocao_novidade_florido_cauda_de_peixe_tubinho_335_1_bc355a4f29396a386ea1de7cddb81d8c.jpeg" width="220"/>
         <div class="details">
          <div class="description">                                           
            Saia Feminina com Babado Estampado
          </div>
          <div class="price">
            R$ 69,99
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Saia Feminina Plus Size " height="300" src="https://acdn.mitiendanube.com/stores/001/688/541/products/862b7d513ac156b8d0dd67c67ba96ff4-d9b2c82ce01c25f7c817163211514412-1024-1024.png" width="200"/>
         <div class="details">
          <div class="description">
            Saia Feminina Plus Size
          </div>
          <div class="price">
            R$ 80,00
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Saia Feminina Sprint" height="300" src="https://trackfield.vtexassets.com/arquivos/ids/306561/saia_feminina_sprint_vinho_003_TF520209_2575.jpg?v=638586568758670000" width="220"/>
         <div class="details">
          <div class="description">
            Saia Feminina Sprint
          </div>
          <div class="price">
            R$ 299,90
             </div>
          </div>
         </div>
        </div>



        <div class="product-list">
            <div class="product">
             <img alt=" Saia Feminina Midi Lápis Tubinho Rosa" height="300" src="https://photos.enjoei.com.br/saia-feminina-midi-lapis-tubinho-rosa-moda-modesta-72366698/800x800/czM6Ly9waG90b3MuZW5qb2VpLmNvbS5ici9wcm9kdWN0cy8yNjU0NjI4OC9iMmQ4YWU5OTI2YmM1MjE3OTU2NDEzNTgyNmYwNGE4ZC5qcGc" width="220"/>
             <div class="details">
              <div class="description">
                Saia Feminina Midi Lápis Tubinho Rosa
              </div>
              <div class="price">
                R$ 59,00
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Saia Feminina Midi Abotoada " height="300" src="https://imagens.viashopmoda.com.br/upload/SaoGabrielDaPalha_ZinskJeans/colecoes/5/2022071412410423221_detalhe_e.jpg" width="220"/>
             <div class="details">
              <div class="description">                                           
                Saia Feminina Midi Abotoada
              </div>
              <div class="price">
                R$ 206,90
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Saia Feminina Plus Size Godê com Bolso" height="300" src="https://dcdn.mitiendanube.com/stores/001/819/033/products/saia-gode-alfaiataria-g1-3f232630c19841b41017162137293772-1024-1024.jpg" width="200"/>
             <div class="details">
              <div class="description">
                Saia Feminina Plus Size Godê com Bolso
              </div>
              <div class="price">
                R$ 119,90
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Saia Feminina com Cinto" height="300" src="https://cdn.awsli.com.br/2500x2500/1538/1538522/produto/208944020/whatsapp-image-2023-03-17-at-08-41-52-trzzqj.jpg" width="220"/>
             <div class="details">
              <div class="description">
                Saia Feminina com Cinto
              </div>
              <div class="price">
                R$ 99,99
                 </div>
              </div>
             </div>
            </div>


            <div class="product-list">
                <div class="product">
                 <img alt=" Saia Feminina Couro" height="300" src="https://images.tcdn.com.br/img/img_prod/645675/saia_feminina_couro_eco_com_mini_fenda_7453_2_705f9b91d6c94b22a4d1e94667579bf4.jpeg" width="220"/>
                 <div class="details">
                  <div class="description">
                    Saia Feminina Couro
                  </div>
                  <div class="price">
                    R$ 79,99
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Saia Feminina Xadrez Curta com Fenda Vinho " height="300" src="https://img.irroba.com.br/fit-in/600x600/filters:fill(fff):quality(80)/lleviaie/catalog/produtos/roupas/saias/vinho/saia-jacqard-moda-llevo-8.jpg" width="220"/>
                 <div class="details">
                  <div class="description">                                           
                    Saia Feminina Xadrez Curta com Fenda Vinho
                  </div>
                  <div class="price">
                    R$ 54,99
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Saia Feminina Bolso" height="300" src="https://torratorra.vtexassets.com/arquivos/ids/1341861/16651000294-136-01.jpg?v=638500728332070000" width="200"/>
                 <div class="details">
                  <div class="description">
                    Saia Feminina Bolso
                  </div>
                  <div class="price">
                    R$ 69,99
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Saia Feminina Canelada Preta" height="300" src="https://lojaplanetgirls.vteximg.com.br/arquivos/ids/284910-1000-1500/19134007_060_1-PG-SAIA-C-CDS-ALTO-CANELADA.jpg?v=638641788038500000" width="220"/>
                 <div class="details">
                  <div class="description">
                    Saia Feminina Canelada Preta
                  </div>
                  <div class="price">
                    R$ 79,99
                     </div>
                  </div>
                 </div>
                </div>


                <div class="product-list">
                    <div class="product">
                     <img alt=" Saia Feminina Midi Godê Sarja Com Bolso" height="300" src="https://static.riachuelo.com.br/rovitex/270476/portrait/arquivos_ids_1363899_7120785-539-00.jpg?imwidth=700" width="220"/>
                     <div class="details">
                      <div class="description">
                        Saia Feminina Midi Godê Sarja Com Bolso
                      </div>
                      <div class="price">
                        R$ 229,99
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt=" Saia longa e casual " height="300" src="https://s.alicdn.com/@sc04/kf/H9ebb3e9b683f4f18b68a89d1112d26dce.jpg_720x720q50.jpg" width="220"/>
                     <div class="details">
                      <div class="description">                                           
                        Saia longa e casual
                      </div>
                      <div class="price">
                        R$ 39,95
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt=" Saia Feminina Plus Size" height="300" src="https://adaptive-images.uooucdn.com.br/ik-seo/tr:w-1100,h-1594,c-at_max,pr-true,q-80/a22274-ogxythlxrt0/pv/90/3a/b7/b6f4dcc541b618879bbe812b2f/saia-feminina-plus-size-melissa-large-15.jpg" width="200"/>
                     <div class="details">
                      <div class="description">
                        Saia Feminina Plus Size
                      </div>
                      <div class="price">
                        R$ 109,99
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt=" Saia Feminina Jeans Midi Elástico na Cintura" height="300" src="https://edexjeans.cdn.magazord.com.br/img/2023/03/produto/28643/saia-feminina-midi-elastico-7637-variacao-72777-1-69fe8fca279e878d6d60e33b0a7197af.jpeg?ims=fit-in/550x850" width="220"/>
                     <div class="details">
                      <div class="description">
                        Saia Feminina Jeans Midi Elástico na Cintura
                      </div>
                      <div class="price">
                        R$ 269,90
                         </div>
                      </div>
                     </div>
                    </div>






  <div class="final">
    <div class="sair">
        <p><a href="logout.html">Deseja Sair?</a></p>
    </div>
</div>
<footer>&copy; Rosangela Vaz - moda feminina para todos os estilos</footer>


</body>
</html>