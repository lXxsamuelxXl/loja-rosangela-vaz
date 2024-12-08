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
         <img alt="Braceletes Prata 925" height="300" src="https://boxloja-std-assets.nyc3.cdn.digitaloceanspaces.com/lojas/qec3v/produtos/82f77764-ffe5-4608-a856-bfc55b8d51e4.jpeg" width="220"/>
         <div class="details">
          <div class="description">
            Braceletes Prata 925
          </div>
          <div class="price">
            R$ 39,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Brincos Zircônia Cravejada Gota Dourado" height="300" src="https://images.tcdn.com.br/img/img_prod/1022170/brincos_zirconia_cravejada_gota_dourado_brilho_festas_1933_1_f77aa319467d70f507117e4d4cbf5838.jpg" width="220"/>
         <div class="details">
          <div class="description">                                           
            Brincos Zircônia Cravejada Gota Dourado
          </div>
          <div class="price">
            R$ 139,00
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Brinco De Prata Flor Strass " height="300" src="https://images.tcdn.com.br/img/img_prod/743485/brinco_de_prata_flor_strass_feminino_joias_festa_casamento_3511_1_edde81dfab8c23d9028f481302f5bc52.jpg" width="200"/>
         <div class="details">
          <div class="description">
            Brinco De Prata Flor Strass
          </div>
          <div class="price">
            R$ 34,99
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt=" Brincos Margaridas Sobreposto" height="300" src="https://images.tcdn.com.br/img/img_prod/743485/brincos_margaridas_sobreposto_femininos_dourado_para_festa_3775_1_9eb9a6d331f4c3a2c60dc9ee945a7161.jpg" width="220"/>
         <div class="details">
          <div class="description">
            Brincos Margaridas Sobreposto
          </div>
          <div class="price">
            R$ 34,99
             </div>
          </div>
         </div>
        </div>


        <div class="product-list">
            <div class="product">
             <img alt="Pulseira Bracelete Feminino Largo Aros" height="300" src="https://images.tcdn.com.br/img/img_prod/1022170/pulseira_bracelete_feminino_largo_aros_cruzados_luxo_2011_1_25660ba000b46375f46762b50a5a1aa8.jpg" width="220"/>
             <div class="details">
              <div class="description">
                Pulseira Bracelete Feminino Largo Aros
              </div>
              <div class="price">
                R$ 79,00
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Bracelete Braço Feminino Dourado " height="300" src="https://down-br.img.susercontent.com/file/br-11134207-7r98s-llarqenwukvw3a" width="220"/>
             <div class="details">
              <div class="description">                                           
                Bracelete Braço Feminino Dourado
              </div>
              <div class="price">
                R$ 79,00
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" Bolsa Tramado Napa Santa Lolla " height="300" src="https://images.tcdn.com.br/img/img_prod/746763/bolsa_tramado_napa_santa_lolla_1737_1_5d62a71348219f0b0c5e32074259f7d5.jpg" width="200"/>
             <div class="details">
              <div class="description">
                Bolsa Tramado Napa Santa Lolla
              </div>
              <div class="price">
                R$ 419,90
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt=" BOLSA VIA MARTE" height="300" src="https://cjdullius.vteximg.com.br/arquivos/ids/3665894-310-375/BOLSA-MARTE-B2-510-01-GRAF.png?v=638493894113900000" width="220"/>
             <div class="details">
              <div class="description">
                Bolsa Via Marte
              </div>
              <div class="price">
                R$ 299,99
                 </div>
              </div>
             </div>
            </div>


            <div class="product-list">
                <div class="product">
                 <img alt="Bolsa Feminina Casual" height="300" src="https://missbellastore.com.br/cdn/shop/files/bolsa-feminina-bia-modelo-casual-espacosa-dia-a-dia-227724.jpg?v=1719601071" width="220"/>
                 <div class="details">
                  <div class="description">
                    Bolsa Feminina Casual
                  </div>
                  <div class="price">
                    R$ 169,90
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Brincos Nuvem Prata 925 " height="300" src="https://boxloja-std-assets.nyc3.cdn.digitaloceanspaces.com/lojas/qec3v/produtos/a81fa15f-1cb4-4742-b514-2fc365bff691.jpg" width="220"/>
                 <div class="details">
                  <div class="description">                                           
                    Brincos Nuvem Prata 925
                  </div>
                  <div class="price">
                    R$ 29,99
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Brincos Femininos Pingo Prata " height="300" src="https://img.ltwebstatic.com/images3_spmp/2024/08/07/04/17229744114e993d46cdf73bb17185000ac43dc59a_thumbnail_750x999.webp" width="200"/>
                 <div class="details">
                  <div class="description">
                    Brincos Femininos Pingo Prata
                  </div>
                  <div class="price">
                    R$ 29,90
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Brincos de Prata Mulher" height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-08 002743.png" width="220"/>
                 <div class="details">
                  <div class="description">
                    Brincos de Prata Mulher 
                  </div>
                  <div class="price">
                    R$ 158,41
                     </div>
                  </div>
                 </div>
                </div>


                <div class="product-list">
                    <div class="product">
                     <img alt="Separador Life Flor em Ligá Rosé" height="300" src="https://lojavivara.vtexassets.com/arquivos/ids/866626/Separador-Life-Flor-em-Liga-Rose-18k-com-Banho-de-Ouro-Rose-18k-79200_1_set.jpg?v=638519257301200000" width="220"/>
                     <div class="details">
                      <div class="description">
                        Separador Life Flor em Ligá Rosé
                      </div>
                      <div class="price">
                        R$ 190,00
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt=" Brincos Feminino Delicado Pedra Strass" height="300" src="https://images.tcdn.com.br/img/img_prod/743485/brincos_feminino_delicado_pedra_strass_para_festa_suspenso_4886_1_8dd90093cc9630e1902d37af6e000945.jpg" width="220"/>
                     <div class="details">
                      <div class="description">                                           
                        Brincos Feminino Delicado Pedra Strass
                      </div>
                      <div class="price">
                        R$ 34,99
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt=" Gargantilha Colar Chocker " height="300" src="https://images.tcdn.com.br/img/img_prod/743485/gargantilha_chocker_acessorios_femininos_decoracao_6362_1_98ab817efda78794501c87f7bbb72fdd.jpg" width="200"/>
                     <div class="details">
                      <div class="description">
                        Gargantilha Colar Chocker
                      </div>
                      <div class="price">
                        R$ 34,99
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt=" Colar de Elos Dourados " height="300" src="https://cdn.awsli.com.br/1000x1000/1123/1123460/produto/239395801/image00001-d41006b7od.jpeg" width="220"/>
                     <div class="details">
                      <div class="description">
                        Colar de Elos Dourados 
                      </div>
                      <div class="price">
                        R$ 89,90
                         </div>
                      </div>
                     </div>
                    </div>


                    <div class="product-list">
                        <div class="product">
                         <img alt="Colar Pingentes Borboletas" height="300" src="https://photos.enjoei.com.br/colar-pingentes-borboletas-prata-marca-shein-acessorios-femininos-72723704/800x800/czM6Ly9waG90b3MuZW5qb2VpLmNvbS5ici9wcm9kdWN0cy8yODExNjY1Mi8yMWU3Zjc5ZjVhNTU4OTljNmEwZjk5NjU4Mjc2OGUzMS5qcGc" width="220"/>
                         <div class="details">
                          <div class="description">
                            Colar Pingentes Borboletas
                          </div>
                          <div class="price">
                            R$ 27,00
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt=" Pulseira Ajustável Glamour Brilhante Prata" height="300" src="https://larissacarolina.bwimg.com.br/larissacarolina/produtos/pulseira-ajustavel-glamour-brilhante-prata-1728475024.8355.jpg" width="220"/>
                         <div class="details">
                          <div class="description">                                           
                            Pulseira Ajustável Glamour Brilhante Prata
                          </div>
                          <div class="price">
                            R$  39,00 
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt=" Maxi Brinco com Orquídea Esmaltada Branco " height="300" src="https://img.lojasrenner.com.br/item/928400765/original/3.jpg" width="200"/>
                         <div class="details">
                          <div class="description">
                            Maxi Brinco com Orquídea Esmaltada Branco
                          </div>
                          <div class="price">
                            R$ 69,90
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt=" Bolsa Feminina Branca" height="300" src="https://inovebele.com.br/cdn/shop/files/S931ea19bc26f49f9a47900ca7a117a7cl.webp?v=1730592579&width=800" width="220"/>
                         <div class="details">
                          <div class="description">
                            Bolsa Feminina Branca
                          </div>
                          <div class="price">
                            R$ 150,00
                             </div>
                          </div>
                         </div>
                        </div>


                        <div class="product-list">
                            <div class="product">
                             <img alt="Colar Turquesa Coração" height="300" src="https://img.elo7.com.br/product/zoom/396DB1A/colar-turquesa-coracao-bijuterias-acessorios-femininos.jpg" width="220"/>
                             <div class="details">
                              <div class="description">
                                Colar Turquesa Coração
                              </div>
                              <div class="price">
                                R$ 69,90
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt="  Brincos Pendurados com Zircônia Verde " height="300" src="https://img.joomcdn.net/ac7f4b178ad745b9f43fb558471b66e3822ab95d_original.jpeg" width="220"/>
                             <div class="details">
                              <div class="description">                                           
                                Brincos Pendurados com Zircônia Verde
                              </div>
                              <div class="price">
                                R$ 53,00
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt="  Anel Estilo Simples Conjunto de Anel para Mulheres " height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-08 155356.png" width="200"/>
                             <div class="details">
                              <div class="description">
                                Anel Estilo Simples Conjunto de Anel para Mulheres
                              </div>
                              <div class="price">
                                R$ 17,50
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt=" Colar Coração Vazado Prata" height="300" src="https://boxloja-std-assets.nyc3.cdn.digitaloceanspaces.com/lojas/qec3v/produtos/d8b87dc1-7067-40ef-b369-34d3e7f6b662.jpg" width="220"/>
                             <div class="details">
                              <div class="description">
                                Colar Coração Vazado Prata
                              </div>
                              <div class="price">
                                R$ 79,00
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