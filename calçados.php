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
         <img alt="Sandália Rasteira em Couro Moema Dourada" height="300" src="https://cdn.awsli.com.br/600x450/486/486754/produto/51756125/faaf22f1ce.jpg" width="220"/>
         <div class="details">
          <div class="description">
            Sandália Rasteira em Couro Moema Dourada
          </div>
          <div class="price">
            R$ 179,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Sapato Feminino Bico Redondo Preto" height="300" src="https://cdn.dooca.store/5792/products/sapato-feminino-bico-redondo-dina-mirtz-8_640x640+fill_ffffff.jpg?v=1693411861&webp=0" width="220"/>
         <div class="details">
          <div class="description">                                           
            Sapato Feminino Bico Redondo Preto
          </div>
          <div class="price">
            R$ 312,55
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Tênis Botinha Preto Nobuck " height="300" src="https://cdn.awsli.com.br/2500x2500/755/755242/produto/59367515/tenis-botinha-preto-5-wmf4mhsikn.jpeg" width="200"/>
         <div class="details">
          <div class="description">
            Tênis Botinha Preto Nobuck
          </div>
          <div class="price">
            R$ 169,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Sapato Social Feminino Salto Baixo" height="300" src="https://cdn.dooca.store/5791/products/14p1qmnwvljedqokgsszdjdgydzg5ewedxic.jpg?v=1701880009" width="220"/>
         <div class="details">
          <div class="description">
            Sapato Social Feminino Salto Baixo
          </div>
          <div class="price">
            R$ 327,66
             </div>
          </div>
         </div>
        </div>


        <div class="product-list">
            <div class="product">
             <img alt="Sneakers feminino, tênis casual" height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-08 000251.png" width="220"/>
             <div class="details">
              <div class="description">
                Sneakers feminino, tênis casual
              </div>
              <div class="price">
                R$ 199,00
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Sapato Feminino Confortável com Neoprene" height="300" src="https://img.irroba.com.br/fit-in/600x600/filters:fill(fff):quality(80)/leveeiii/catalog/f10105-cafe/f10105-cafe-levecomfort-leve-comfort-lev-confort-06.jpg" width="220"/>
             <div class="details">
              <div class="description">                                           
                Sapato Feminino Confortável com Neoprene
              </div>
              <div class="price">
                R$ 224,90
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Sapato Feminino de Salto Vermelho " height="300" src="https://www.ditorini.com.br/cdn/shop/products/S8019d44f322e492b8af5c1f404fd8b19s.jpg?v=1690681149" width="200"/>
             <div class="details">
              <div class="description">
                Sapato Feminino de Salto Vermelho
              </div>
              <div class="price">
                R$ 180,60
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Sandália de Salto Quadrado Feminina" height="300" src="https://cdn.sistemawbuy.com.br/arquivos/0cf59bd3b2c14ed16aaf7331fb7f5b9d/produtos/66983d8eca1c5/1000937705-66983f71683b3.jpg" width="220"/>
             <div class="details">
              <div class="description">
                Sandália de Salto Quadrado Feminina
              </div>
              <div class="price">
                R$ 49,90
                 </div>
              </div>
             </div>
            </div>


            <div class="product-list">
                <div class="product">
                 <img alt="Sapato Feminino Oxford Branco com Salto" height="300" src="https://cdn.awsli.com.br/600x450/250/250759/produto/217266189/img-20211015-wa0070-io3co9xc1n.jpg" width="220"/>
                 <div class="details">
                  <div class="description">
                    Sapato Feminino Oxford Branco com Salto
                  </div>
                  <div class="price">
                    R$ 198,80
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Sapato Profissional Feminino Lady" height="300" src="https://images.tcdn.com.br/img/img_prod/664507/sapato_unissex_profissional_softworks_lady_works_trabalho_epi_c_a_40_293_eva_bb95_branco_87_1_914fb18a1fe96e2cfcf04f2740971613.jpg" width="220"/>
                 <div class="details">
                  <div class="description">                                           
                    Sapato Profissional Feminino Lady
                  </div>
                  <div class="price">
                    R$ 104,49
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Sandália Feminina Mississipi " height="300" src="https://www.katy.com.br/cdn/imagens/produtos/det/sandalia-feminina-mississipi-b2cc3c97e9815108e8231bc38234bf4b.jpg" width="200"/>
                 <div class="details">
                  <div class="description">
                    Sandália Feminina Mississipi
                  </div>
                  <div class="price">
                    R$ 159,90 
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Sandália Ortopédica Feminina" height="300" src="https://www.dmstores.com.br/cdn/shop/products/sandalia-ortopedica-feminina-confort-plus-calcados-sandalia-feminina-1-dm-stores-branco-33-122073_700x.jpg?v=1675530644" width="220"/>
                 <div class="details">
                  <div class="description">
                    Sandália Ortopédica Feminina
                  </div>
                  <div class="price">
                    R$ 284,90
                     </div>
                  </div>
                 </div>
                </div>


                <div class="product-list">
                    <div class="product">
                     <img alt="Tênis Feminino Sandy em Couro Branco com Capuccino" height="300" src="https://cdn.shoppub.io/seratto/media/filer_public/20/fd/20fd3741-1d10-424b-b5b7-c8e53036e8f1/sem_nome_1000_x_1000_px_14.png" width="220"/>
                     <div class="details">
                      <div class="description">
                        Tênis Feminino Sandy em Couro Branco com Capuccino
                      </div>
                      <div class="price">
                        R$ 249,90
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt=" Sapato Feminino Comfortflex Linha Joanete Preto" height="300" src="https://cdnv2.moovin.com.br/detalhecalcados/imagens/produtos/det/scarpin-sapato-feminino-comfortflex-salto-medio-preto-2395303.jpg" width="220"/>
                     <div class="details">
                      <div class="description">                                           
                        Sapato Feminino Comfortflex Linha Joanete Preto
                      </div>
                      <div class="price">
                        R$ 250,90
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt="Tenis Feminino Casual Via Angel Leve " height="300" src="https://images.tcdn.com.br/img/img_prod/752868/tenis_feminino_casual_via_angel_leve_confortavel_barato_t_01_331_1_7e2b3097a73644087b6d3728955406b9.jpg" width="200"/>
                     <div class="details">
                      <div class="description">
                        Tenis Feminino Casual Via Angel Leve
                      </div>
                      <div class="price">
                        R$ 53,99 
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt=" Tenis Feminino Usaflex Tecido" height="300" src="https://images.tcdn.com.br/img/img_prod/697317/tenis_feminino_usaflex_tecido_ab6415_1323_1_9630a6580467c9634bb543dec0a838e0.jpg" width="220"/>
                     <div class="details">
                      <div class="description">
                        Tenis Feminino Usaflex Tecido
                      </div>
                      <div class="price">
                        R$ 224,90
                         </div>
                      </div>
                     </div>
                    </div>
            
            
                    <div class="product-list">
                        <div class="product">
                         <img alt="Sapato Boneca Retrô em Couro Bico Quadrado Swing Vermelho" height="300" src="https://cdn.shoppub.io/cdn-cgi/image/w=1000,h=1000,q=80,f=auto/zpzshoes/media/uploads/produtos/foto/asdfzhvf/eb21e178-ea90-4294-be8d-45d09e83caaf.jpeg" width="220"/>
                         <div class="details">
                          <div class="description">
                            Sapato Boneca Retrô em Couro Bico Quadrado Swing Vermelho
                          </div>
                          <div class="price">
                            R$ 329,90 
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt=" Tênis Casual liso" height="300" src="https://cdn.sistemawbuy.com.br/arquivos/0cf59bd3b2c14ed16aaf7331fb7f5b9d/produtos/VIO2WEI6/img-20220705-wa0016-62c45784a6c8d.jpg" width="220"/>
                         <div class="details">
                          <div class="description">                                           
                            Tênis Casual liso
                          </div>
                          <div class="price">
                            R$ 47,90 
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt=" Sapato Feminino ComfortFlex " height="300" src="https://images.tcdn.com.br/img/img_prod/837907/sapato_feminino_comfortflex_2393402_15412_1_019d921c613f201741eb4380797331a7.jpg" width="200"/>
                         <div class="details">
                          <div class="description">
                            Sapato Feminino ComfortFlex
                          </div>
                          <div class="price">
                            R$ 222,22
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt=" Sapato modare feminino salto baixo " height="300" src="https://images.tcdn.com.br/img/img_prod/770541/sapato_modare_feminino_salto_baixo_7373_100_29683_1_5ee5ff8f3918346a89efaa2202acc817.jpg" width="220"/>
                         <div class="details">
                          <div class="description">
                            Sapato modare feminino salto baixo
                          </div>
                          <div class="price">
                            R$ 159,99
                             </div>
                          </div>
                         </div>
                        </div>
            
            
                        <div class="product-list">
                            <div class="product">
                             <img alt="Tênis Feminino Olympikus" height="300" src="https://cdn.awsli.com.br/2500x2500/132/132685/produto/73943515/tenis-olympikus-feminino-day-cinza-xawfro.jpg" width="220"/>
                             <div class="details">
                              <div class="description">
                                Tênis Feminino Olympikus
                              </div>
                              <div class="price">
                                R$ 229,99
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt=" Tênis Feminino Vans Ultrarange" height="300" src="https://static.sessionstore.com.br/public/session/imagens/produtos/tenis-feminino-vans-ultrarange-neo-vr3-black-white-66bcf23740255.jpg" width="220"/>
                             <div class="details">
                              <div class="description">                                           
                                Tênis Feminino Vans Ultrarange
                              </div>
                              <div class="price">
                                R$ 869,90
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt=" Sandália Anabela Alta Cordão Multicolorido - Rosa " height="300" src="https://static.shoestock.com.br/produtos/sandalia-shoestock-anabela-alta-cordao-multicolorido/18/O01-5256-018/O01-5256-018_zoom1.jpg?ts=1695436559&ims=326x" width="200"/>
                             <div class="details">
                              <div class="description">
                                Sandália Anabela Alta Cordão Multicolorido - Rosa
                              </div>
                              <div class="price">
                                R$ 349,90
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt=" Sapato Feminino Scarpin" height="300" src="https://lojasla.com/cdn/shop/products/sapato-feminino-scarpin-salto-alto-modelo-charle-252731.jpg?v=1694910601" width="220"/>
                             <div class="details">
                              <div class="description">
                                Sandália Ortopédica Feminina
                              </div>
                              <div class="price">
                                R$ 439,90
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