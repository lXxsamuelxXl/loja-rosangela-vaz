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
         <img alt="Calça feminina de perna larga " height="300" src="https://ae01.alicdn.com/kf/S212da7963b02487abf71ae7db29fa85ff/Cal-a-feminina-de-perna-larga-cal-a-para-alfaiataria-cal-a-de-cintura-alta-senhora.jpg" width="220"/>
         <div class="details">
          <div class="description">
            Calça feminina de perna larga
          </div>
          <div class="price">
            R$ 300,05
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Calça Pantalona Plus Size" height="300" src="https://s.maniabrasil.com.br/product/2024/04/calca-pantalona-plus-size-feminina-de-linho-off-white-mania-brasil-2.jpg" width="220"/>
         <div class="details">
          <div class="description">
            Calça Pantalona Plus Size
          </div>
          <div class="price">
            R$ 319,90

             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Calça Jeans Plus Size" height="300" src="https://cdn.awsli.com.br/800x800/21/21120/produto/164408416/7391cb5308.jpg" width="200"/>
         <div class="details">
          <div class="description">
            Calça Jeans Plus Size
          </div>
          <div class="price">
            R$ 24,36
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Calça Flare Tule" height="300" src="https://zinzane.vtexassets.com/arquivos/ids/588976-500-auto?v=638364343248170000&width=500&height=auto&aspect=true" width="220"/>
         <div class="details">
          <div class="description">
            Calça Flare Tule
          </div>
          <div class="price">
            R$ 239,99
             </div>
          </div>
         </div>
        </div>


    <div class="product-list">
        <div class="product">
         <img alt="Calça Feminina Lisa Linho Bege " height="300" src="https://images.tcdn.com.br/img/img_prod/746427/calca_feminina_lisa_linho_bege_3343_1_df2a16e050d1812eba8c6f7e6d82381b.jpg" width="220"/>
         <div class="details">
          <div class="description">
            Calça Feminina Lisa Linho Bege
          </div>
          <div class="price">
            R$ 279,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Calça Feminina Social Alfaiataria Reta com Botão Encapado Caqui" height="300" src="https://fernandaramosstore.com.br/wp-content/uploads/2024/03/fernandaramosstore_com_br-calca-feminina-social-alfaiataria-reta-com-botao-encapado-caqui-2-jpg.webp" width="220"/>
         <div class="details">
          <div class="description">
            Calça Feminina Social Alfaiataria Reta com Botão Encapado Caqui
          </div>
          <div class="price">
            R$ 119,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Calça Feminina Jeans Jogger  " height="300" src="https://lojaplanetgirls.vteximg.com.br/arquivos/ids/269080-1000-1500/01052480_017_1-PG-CALCA-JEANS-C-BOLSOS-CARGO-E-ELASTICO.jpg?v=638392848103230000" width="200"/>
         <div class="details">
          <div class="description">
            Calça Feminina Jeans Jogger 
          </div>
          <div class="price">
            R$ 259,99
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Calça Cargo feminina vintage streetwear" height="300" src="https://acdn.mitiendanube.com/stores/003/275/653/products/6-2accbea942292dfeb017129291618295-1024-1024.png" width="220"/>
         <div class="details">
          <div class="description">
            Calça Cargo feminina vintage streetwear
          </div>
          <div class="price">
            R$ 289,90
             </div>
          </div>
         </div>
        </div>
    
    
        <div class="product-list">
            <div class="product">
             <img alt="CALÇA FEMININA COM ELÁSTICO E FAIXA " height="300" src="https://39348.cdn.simplo7.net/static/39348/sku/calcas-calca-feminina-com-elastico-e-faixa--p-1685971028369.jpg" width="220"/>
             <div class="details">
              <div class="description">
                CALÇA FEMININA COM ELÁSTICO E FAIXA
              </div>
              <div class="price">
                R$ 159,90
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt="Calça Feminina Solta Vermelha-Vinho" height="300" src="https://http2.mlstatic.com/D_NQ_NP_790709-MLB50606862184_072022-O.webp" width="220"/>
             <div class="details">
              <div class="description">
                Calça Feminina Solta Vermelha-Vinho
              </div>
                <div class="price">
                R$ 169,99
                    </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt="Calça Feminina Jeans Rasgada " height="300" src="https://i.pinimg.com/originals/c5/8a/f3/c58af34414e3d2079ab8276c1efd89ac.png" width="200"/>
             <div class="details">
              <div class="description">
                Calça Feminina Jeans Rasgada 
              </div>
              <div class="price">
                R$ 69,90
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt="Calça Jeans Feminina Serena Mom Plus Size" height="300" src="https://s.imaginejeans.com.br/product/2023/10/calca-feminina-jeans-plus-size-mom-bolso-frontal-traseiro-ref-1020-azul-claro-04.jpg" width="220"/>
             <div class="details">
              <div class="description">
                Calça Jeans Feminina "Serena" Mom Plus Size
              </div>
              <div class="price">
                R$ 169,99
                 </div>
              </div>
             </div>
            </div>
    
    
            <div class="product-list">
                <div class="product">
                 <img alt="Calcas Femininas Plus Size Confortável  " height="300" src="https://http2.mlstatic.com/D_NQ_NP_828438-MLB77603151191_072024-O.webp" width="220"/>
                 <div class="details">
                  <div class="description">
                    Calças Femininas Plus Size Confortável 
                  </div>
                  <div class="price">
                    R$ 189,99
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt="Calça veludo cargo rosa pequiá" height="300" src="https://babadotop.vteximg.com.br/arquivos/ids/7120055-548-806/24001peq04951-p1.jpg?v=638635777854970000" width="220"/>
                 <div class="details">
                  <div class="description">
                    Calça veludo cargo rosa pequiá
                  </div>
                  <div class="price">
                    R$ 529,00
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt="Calça Sarja Baggy Feminina Caqui " height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-07 222913.png" width="200"/>
                 <div class="details">
                  <div class="description">
                    Calça Sarja Baggy Feminina Caqui
                  </div>
                  <div class="price">
                    R$ 212,30
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt="Calça Moletom Feminino Vnho" height="300" src="https://images.tcdn.com.br/img/img_prod/1030565/calca_moletom_feminino_riu_kiu_jogger_ref_10252_1791_1_bb23a0f0a0022d7f5f709147436a6afa.jpg" width="220"/>
                 <div class="details">
                  <div class="description">
                    Calça Moletom Feminino Vinho
                  </div>
                  <div class="price">
                    R$ 247,39
                     </div>
                  </div>
                 </div>
                </div>



                <div class="product-list">
                    <div class="product">
                     <img alt="Calça Jeans Feminina " height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-08 043302.png" width="220"/>
                     <div class="details">
                      <div class="description">
                        Calça Jeans Feminina
                      </div>
                      <div class="price">
                        R$  489,90
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt="Calça Jeans Feminina Rascada Jogger" height="300" src="https://santogato.com/6163-large_default/calca-jeans-feminina-rascada-jogger-cintura-alta-elastico-na-perna.jpg" width="220"/>
                     <div class="details">
                      <div class="description">
                        Calça Jeans Feminina Rascada Jogger
                      </div>
                      <div class="price">
                        R$ 156,80 
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt="Calça Feminina Elástico  " height="300" src="https://lojamacaw.com.br/wp-content/uploads/2024/02/GEA_8711.jpg" width="200"/>
                     <div class="details">
                      <div class="description">
                        Calça Feminina Elástico
                      </div>
                      <div class="price">
                        R$ 210,00
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt="CALÇA JEANS FEMININA " height="300" src="https://acdn.mitiendanube.com/stores/003/859/035/products/foto_1-2-fe467feb4e2a48a11817097358519507-640-0.webp" width="220"/>
                     <div class="details">
                      <div class="description">
                        CALÇA JEANS FEMININA 
                      </div>
                      <div class="price">
                        R$ 119,99
                         </div>
                      </div>
                     </div>
                    </div>
                
                
                    <div class="product-list">
                        <div class="product">
                         <img alt="Calça Feminina  " height="300" src="https://cdn.awsli.com.br/1000x1000/1538/1538522/produto/223650190/a8638872-ab1a-479d-a077-600a694774af-me0io6nh42.jpg" width="220"/>
                         <div class="details">
                          <div class="description">
                            Calça Feminina 
                          </div>
                          <div class="price">
                            R$ 209,99
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt="Calça Jeans Feminina Flare Azul" height="300" src="https://fardasexpress.fbitsstatic.net/img/p/calca-jeans-feminina-flare-azul-70193/256945-1.jpg?w=420&h=572&v=no-change&qs=ignore" width="220"/>
                         <div class="details">
                          <div class="description">
                            Calça Jeans Feminina Flare Azul
                          </div>
                            <div class="price">
                            R$ 84,25
                                </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt="Calça Country Feminina " height="300" src="https://http2.mlstatic.com/D_NQ_NP_645187-MLB70771484634_072023-O.webp" width="200"/>
                         <div class="details">
                          <div class="description">
                            Calça Country Feminina
                          </div>
                          <div class="price">
                            R$ 259,90
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt="Calças femininas verão outono ajuste solto cargo vintage" height="300" src="https://m.media-amazon.com/images/I/41mGlaSHi7L._AC_SY1000_.jpg" width="220"/>
                         <div class="details">
                          <div class="description">
                            Calças femininas verão outono ajuste solto cargo vintage
                          </div>
                          <div class="price">
                            R$ 27,10
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