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
         <img alt="Cropped Feminino Over Positive Hiatto" height="300" src="https://hiatto.cdn.magazord.com.br/img/2023/11/produto/11479/02f0254-026-cropped-feminino-over-positive-hiatto-verde-claro-2.jpg?ims=630x945" width="220"/>
         <div class="details">
          <div class="description">
            Cropped Feminino Over Positive Hiatto
          </div>
          <div class="price">
            R$ 59,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Blusa cropped top feminino drapeado detalhe amarração nas costas" height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-07 233706.png" width="220"/>
         <div class="details">
          <div class="description">
            Cropped Top Feminino Drapeado Amarração nas Costas
          </div>
          <div class="price">
            R$ 45,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Cropped feminino branco manga curta flow " height="300" src="https://dlkmodas.fbitsstatic.net/img/p/cropped-feminino-branco-manga-curta-flow-83142/307182.jpg?w=1000&h=1428&v=no-value" width="200"/>
         <div class="details">
          <div class="description">
            Cropped Feminino Branco Manga Curta Flow
          </div>
          <div class="price">
            R$ 44,09
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Cropped Feminino com Recorte Alça Média Rosa Claro " height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-07 234110.png" width="220"/>
         <div class="details">
          <div class="description">
            Cropped Feminino com Recorte Alça Média Rosa Claro
          </div>
          <div class="price">
            R$ 39,99
             </div>
          </div>
         </div>
        </div>
  


        <div class="product-list">
            <div class="product">
             <img alt="Cropped Feminino Liso Alça Cruzada Verde Escuro" height="300" src="https://lojaplanetgirls.vteximg.com.br/arquivos/ids/262815-1000-1500/10070804_032_1-PG-BLUSA-CROPPED-ALCA-CRUZADA.jpg?v=638333226407170000" width="220"/>
             <div class="details">
              <div class="description">
                Cropped Feminino Liso Alça Cruzada Verde Escuro
              </div>
              <div class="price">
                R$ 79,99
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt="Cropped Feminino Preto Nadador Canelado" height="300" src="https://kcrespi.com.br/wp-content/uploads/2024/02/AAA5317D-195C-4A1A-B6C5-E6477AB72851.jpeg" width="220"/>
             <div class="details">
              <div class="description">
                Cropped Feminino Preto Nadador Canelado
              </div>
              <div class="price">
                R$ 49,90
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Cropped Feminino Top Tricot Moda Verão Alcinha Tranças " height="300" src="https://acdn.mitiendanube.com/stores/003/283/421/products/produto-172719852166f2f539ae235-b75e15f403afcc833217284740330781-1024-1024.jpg" width="200"/>
             <div class="details">
              <div class="description">
                Cropped Feminino Top Tricot Moda Verão Alcinha Tranças
              </div>
              <div class="price">
                R$ 55,99
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Cropped Top Feminino Preto " height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-07 235033.png" width="220"/>
             <div class="details">
              <div class="description">
                Cropped Top Feminino Preto
              </div>
              <div class="price">
                R$ 139,99
                 </div>
              </div>
             </div>
            </div>


  

            <div class="product-list">
                <div class="product">
                 <img alt="Cropped Feminino Verde Água " height="300" src="https://savancini.cdn.magazord.com.br/img/2024/07/produto/11982/cropped-feminino-verde-agua-moving-savancini-7710.jpg?ims=fit-in/726x969/filters:fill(white)" width="220"/>
                 <div class="details">
                  <div class="description">
                    Cropped Feminino Verde Água 
                  </div>
                  <div class="price">
                    R$ 79,90
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt="Blusa Cropped Feminino Preto e Branco" height="300" src="https://cdn.awsli.com.br/600x450/222/222855/produto/21634516/f4e01382ea.jpg" width="220"/>
                 <div class="details">
                  <div class="description">
                    Blusa Cropped Feminino Preto e Branco
                  </div>
                  <div class="price">
                    R$ 59,90
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Cropped Feminino Canelado Cava Assimétrica " height="300" src="https://d17afo29wyla0w.cloudfront.net/Custom/Content/Products/39/23/39236_cropped-fem-canelado-cava-assimetrica-pr-16559-m2355-_m6_638247514753588693.jpg" width="200"/>
                 <div class="details">
                  <div class="description">
                    Cropped Feminino Canelado Cava Assimétrica
                  </div>
                  <div class="price">
                    R$ 29,99
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Cropped Feminino Plus Size" height="300" src="https://images.tcdn.com.br/img/img_prod/1214490/cropped_leia_tomara_que_caia_tecido_canelado_451_1_6417775fa14381c997c43532dfe7b6d7.jpg" width="220"/>
                 <div class="details">
                  <div class="description">
                    Cropped Feminino Plus Size
                  </div>
                  <div class="price">
                    R$ 26,00
                     </div>
                  </div>
                 </div>
                </div>



                <div class="product-list">
                    <div class="product">
                        <img alt="Top Corinthians Cropped Feminino" height="300" src="https://static.shoptimao.com.br/produtos/top-corinthians-cropped-feminino/06/RT4-0018-006/RT4-0018-006_zoom1.jpg?ts=1719331328?ims=1088x" width="220"/>
                        <div class="details">
                         <div class="description">
                           Top Corinthians Cropped Feminino
                         </div>
                         <div class="price">
                           R$ 119,99
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                        <img alt="Blusa Cropped Feminino Preto Labellamafia" height="300" src="https://http2.mlstatic.com/D_NQ_NP_759730-MLB46283479134_062021-O.webp" width="220"/>
                        <div class="details">
                         <div class="description">
                           Blusa Cropped Feminino Preto Labellamafia
                         </div>
                         <div class="price">
                           R$ 174,69
                            </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                        <img alt=" CROPPED FEMININO MARVA AZUL MARINHO" height="300" src="https://cdn.sistemawbuy.com.br/arquivos/1739ce83d7f57691a6f5876b326f8785/produtos/667372c5ac7c7/dsc09495-6674778a87066.jpg" width="200"/>
                        <div class="details">
                         <div class="description">
                           CROPPED FEMININO MARVA AZUL MARINHO
                         </div>
                         <div class="price">
                           R$ 199,90
                            </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                        <img alt="Cropped Feminino Flora Off White  " height="300" src="https://cdn.awsli.com.br/625/625932/produto/181453843/85fe5d0509.jpg" width="220"/>
                        <div class="details">
                         <div class="description">
                           Cropped Feminino Flora Off White
                           </div>
                         <div class="price">
                           R$ 199,90
                            </div>
                         </div>
                        </div>
                       </div>


                       <div class="product-list">
                        <div class="product">
                         <img alt="Blusa Feminino Cropped Canelado Manga Longa" height="300" src="https://images2.marisa.com.br/medias/sys_master/images/images/h78/hc9/16361077178398/Blusa-Feminino-Cropped-Canelado-Manga-Longa-10056335989-C1.jpg" width="220"/>
                         <div class="details">
                          <div class="description">
                            Blusa Feminino Cropped Canelado Manga Longa
                          </div>
                          <div class="price">
                            R$ 49,99
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt="Cropped Feminino um Ombro só Amarração na Barriga" height="300" src="https://cdn.awsli.com.br/600x700/1959/1959969/produto/181931548/f898d5f62d.jpg" width="220"/>
                         <div class="details">
                          <div class="description">
                            Cropped Feminino um Ombro só Amarração na Barriga
                          </div>
                          <div class="price">
                            R$ 49,90
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt=" Cropped Feminino Top Tricot Moda Verão Alcinha Tranças " height="300" src="https://acdn.mitiendanube.com/stores/003/283/421/products/produto-172719852166f2f539ae235-b75e15f403afcc833217284740330781-1024-1024.jpg" width="200"/>
                         <div class="details">
                          <div class="description">
                            Cropped Feminino Top Tricot Moda Verão Alcinha Tranças
                          </div>
                          <div class="price">
                            R$ 39,90 
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt=" Cropped Feminino Aero Ny " height="300" src="https://aeropostalebrasil.vteximg.com.br/arquivos/ids/1095278-1000-1500/Regata-Feminino-Aeropostale_9873114_000200-1.jpg?v=638609285823600000" width="220"/>
                         <div class="details">
                          <div class="description">
                            Cropped Feminino Aero Ny
                          </div>
                          <div class="price">
                            R$ 149,99
                             </div>
                          </div>
                         </div>
                        </div>



                        <div class="product-list">
                            <div class="product">
                             <img alt="CROPPED FEMININO CORSELET AMACIADO " height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-08 124355.png" width="220"/>
                             <div class="details">
                              <div class="description">
                                CROPPED FEMININO CORSELET AMACIADO
                              </div>
                              <div class="price">
                                R$ 179,80
                                 </div>
                             </div>
                            </div>


                            <div class="product">
                                <img alt="Top Cropped Feminino Regata Um Ombro Laranja" height="300" src="https://51451.cdn.simplo7.net/static/51451/sku/moda-fitness-top-cropped-feminino-regata-um-ombro-so-suplex-laranja-1698751452285.jpg" width="220"/>
                                <div class="details">
                                 <div class="description">
                                   Top Cropped Feminino Regata Um Ombro Laranja
                                 </div>
                                 <div class="price">
                                   R$ 14,99
                                    </div>
                                </div>
                               </div>
                           
                           
                               <div class="product">
                                <img alt="  Blusa Cropped Feminino Manga Longa Gola Alta " height="300" src="https://a-static.mlcdn.com.br/800x600/blusa-cropped-feminino-manga-longa-gola-alta-canelada-moda-blogueira-filo-modas/shopbrasil2/2d2cdeec286911eda2bb4201ac185019/e8fcf1ed1d410bba116fb164c8cb9cd1.jpeg" width="200"/>
                                <div class="details">
                                 <div class="description">
                                   Blusa Cropped Feminino Manga Longa Gola Alta
                                 </div>
                                 <div class="price">
                                   R$ 45,00
                                    </div>
                                </div>
                               </div>
                           
                           
                               <div class="product">
                                <img alt=" Cropped Feminino Plus Size Com Abertura No Ombro E Amarração" height="300" src="https://images.tcdn.com.br/img/img_prod/1288681/cropped_feminino_plus_size_com_abertura_no_ombro_e_amarracao_587_1_b67046ea65a8d89c99a311580aceeeae.jpg" width="220"/>
                                <div class="details">
                                 <div class="description">
                                   Cropped Feminino Plus Size com Abertura no Ombro e Amarração
                                 </div>
                                 <div class="price">
                                   R$ 99,90
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
