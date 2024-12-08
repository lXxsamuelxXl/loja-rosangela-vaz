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
     <img alt="Vestido Plus Size Feminino Babado Manga Curta" height="300" src="https://images2.marisa.com.br/medias/sys_master/images/images/h9e/hda/16306800230430/Vestido-Plus-Size-Feminino-Babado-Manga-Curta-Marisa-10052939181-C1.jpg" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Plus Size Feminino Babado Manga Curta
      </div> 
      <div class="price">
         R$ 79,99
          </div>
     </div>
    </div>
 
 

    <div class="product">
     <img alt="Vestido Longo Feminino" height="300" src="" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Longo Feminino
      </div> 
      <div class="price">
         R$ 159,99
          </div>
     </div>
    </div>
 
 
    <div class="product">
     <img alt="Vestido Feminino Canelado Manga Curta" height="300" src="https://images2.marisa.com.br/medias/sys_master/images/images/h1b/h35/16342240722974/Vestido-Feminino-Canelado-Manga-Curta-Marisa-10055550642-C1.jpg" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Feminino Canelado Manga Curta
      </div>
      <div class="price">
         R$ 69,99
          </div>
     </div>
    </div>
 
 
    <div class="product">
     <img alt="Vestido regata feminino ellen Plus Size" height="300" src="https://images.tcdn.com.br/img/img_prod/1050612/vestido_regata_feminino_ellen_plus_size_855_1_c781656f535a2fcc2e333105e82860d2.jpg" width="220"/>
     <div class="details">
      <div class="description">
        Vestido regata feminino ellen Plus Size
      </div>
      <div class="price">
         R$ 99,90
          </div>
     </div>
    </div>
   </div>
  


  <div class="product-list">
    <div class="product">
     <img alt="Vestido Jana de Laise Fluído com Manga e Rendas Azul " height="300" src="https://images.tcdn.com.br/img/img_prod/798207/vestido_jana_de_laise_fluido_com_manga_e_rendas_azul_3167_1_3e478e7762e202ac725113d5135d7961.jpg" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Jana de Laise Fluído com Manga e Rendas Azul 
      </div>
      <div class="price">
      R$ 599,90
       </div>

     </div>
    </div>


    <div class="product">
     <img alt="Vestido festa longo plus size" height="300" src="https://www.myfave.com.br/wp-content/uploads/2022/10/1-2.png" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Festa Longo Plus Size 
      </div>
      <div class="price">
        R$1,050.00
         </div>
     </div>
    </div>


    <div class="product">
     <img alt="VESTIDO MIDI COM FENDA LATERAL " height="300" src="https://39348.cdn.simplo7.net/static/39348/sku/vestidos-vestido-midi-com-fenda-lateral-1683901576101.jpg" width="200"/>
     <div class="details">
      <div class="description">
        Vestido Midi com Fenda Lateral 
      </div> 
      <div class="price">
        R$ 179,90
         </div>
     </div>
    </div>


    <div class="product">
     <img alt="Vestido curto de lasie amarração nas costas" height="300" src="https://cdn.awsli.com.br/600x450/1005/1005299/produto/124877387/60084d6a4e.jpg" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Curto de Lasie Amarração nas Costas 
      </div>
      <div class="price">
        R$ 299,90
         </div>
      </div>
     </div>
    </div>


  

  <div class="product-list">
   <div class="product">
    <img alt="Vestido Infinity Multiformas" height="300" src="https://acdn.mitiendanube.com/stores/001/552/355/products/marsala-story-e150a59fea8eea2dfd17332373687616-640-0.webp" width="220"/>
    <div class="details">
     <div class="description">
        Vestido Infinity Multiformas
     </div> 
     <div class="price">
        R$ 260,00
         </div>
    </div>
   </div>


   <div class="product">
    <img alt="Vestido Estampa Lorenzzo" height="300" src="https://ohboy.vtexassets.com/arquivos/ids/344657-834-1252?v=638584123865500000&width=834&height=1252&aspect=true" width="220"/>
    <div class="details">
     <div class="description">
        Vestido Estampa Lorenzzo
     </div> 
     <div class="price">
        R$ 528,00
         </div>
    </div>
   </div>


   <div class="product">
    <img alt="Vestido Plus Size Branco em Renda" height="300" src="https://cdn.static-vkmodas.com.br/product_images/1600x1600/t/458/vestido-plus-size-branco-em-renda-1-72821.jpg" width="220"/>
    <div class="details">
     <div class="description">
        Vestido Plus Size Branco em Renda 
     </div>
     <div class="price">
        R$ 260,00
         </div>
    </div>
   </div>


   <div class="product">
    <img alt="vestido midi de viscose floral com fenda verde" height="300" src="https://cea.vtexassets.com/arquivos/ids/58050764/vestido-midi-de-viscose-floral-com-fenda-verde-1048284-Verde_1.jpg?v=638285706740030000" width="220"/>
    <div class="details">
     <div class="description">
        Vestido Midi de Viscose Floral com Fenda Verde
     </div>
     <div class="price">
        R$ 159,99
         </div>
    </div>
   </div>
  </div>



  <div class="product-list">
    <div class="product">
     <img alt="Vestido Longo Elegante Feminino" height="300" src="https://humarraso.com.br/cdn/shop/files/Vestido-Longo-Elegante-Feminino-Vitoria_-_-HumArraso-55853519_700x.jpg?v=1706768778" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Longo Elegante Feminino
      </div> 
      <div class="price">
         R$ 330,00
          </div>
     </div>
    </div>
 
 

    <div class="product">
     <img alt="Vestido Feminino Stanley" height="300" src="https://missbellastore.com.br/cdn/shop/files/vestido-feminino-stanley-sinta-se-elegante-e-sofisticada-em-qualquer-ocasiao-633065.jpg?v=1719600809" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Feminino Stanley
      </div> 
      <div class="price">
         R$ 349,90
          </div>
     </div>
    </div>
 
 
    <div class="product">
     <img alt="Vestidos femininos de verão" height="300" src="https://m.media-amazon.com/images/I/51wetDS42zL._AC_SY1000_.jpg" width="220"/>
     <div class="details">
      <div class="description">
        Vestidos femininos de verão 
      </div>
      <div class="price">
         R$ 144,92
          </div>
     </div>
    </div>
 
 
    <div class="product">
     <img alt="Vestido de Fenda Cáqui" height="300" src="https://lojalorella.com.br/cdn/shop/files/Wefads-Mulheres-Vestido-Maxi-Ver-o-Elegante-S-lida-Um-Ombro-Sem-Mangas-Fenda-Nipped-Cintura_ca7c1738-5139-4e62-8592-773df5ddf6be.jpg?v=1712888257" width="220"/>
     <div class="details">
      <div class="description">
        Vestido de Fenda Cáqui
      </div>
      <div class="price">
         R$ 189,90
          </div>
     </div>
    </div>
   </div>



   <div class="product-list">
    <div class="product">
     <img alt="Vestido Soltinho Midi Florido" height="300" src="https://lojalorella.com.br/cdn/shop/files/VestidoSoltinhoMidiFlorido-Camponesa_5_4e9ce871-0e30-446c-8527-3a81459366fd_700x.webp?v=1712509485" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Soltinho Midi Florido
      </div> 
      <div class="price">
         R$ 279,90
          </div>
     </div>
    </div>
 
 

    <div class="product">
     <img alt="Vestidos Femininos Festa Roupas Da Moda" height="300" src="https://down-br.img.susercontent.com/file/bb8bfe1a6885439431326e46cbadf4df" width="220"/>
     <div class="details">
      <div class="description">
        Vestidos Femininos Festa Roupas Da Moda
      </div> 
      <div class="price">
         R$ 71,99
          </div>
     </div>
    </div>
 
 
    <div class="product">
     <img alt="Vestido feminino outono gola alta" height="300" src="https://img.joomcdn.net/54c9359b195cc85690cb0ef449c90a5aa01f678f_original.jpeg" width="220"/>
     <div class="details">
      <div class="description">
        Vestido feminino outono gola alta
      </div>
      <div class="price">
         R$ 140,70
          </div>
     </div>
    </div>
 
 
    <div class="product">
     <img alt="Vestido Feminino De Renda Sem Mangas" height="300" src="https://down-br.img.susercontent.com/file/sg-11134201-23010-6fqidm2xe6lv3c" width="220"/>
     <div class="details">
      <div class="description">
        Vestido Feminino De Renda Sem Mangas
      </div>
      <div class="price">
         R$ 232,01
          </div>
     </div>
    </div>
   </div>


   <div class="product-list">
    <div class="product">
     <img alt="Vestido Longo Azul Royal Isabelly ombro a ombro Brilhoso" height="300" src="https://acdn.mitiendanube.com/stores/001/552/355/products/img_4259-7d50e22b34fd79654717177022361460-480-0.jpeg" width="220"/>
     <div class="details">
      <div class="description">
         Vestido Longo Azul Royal Isabelly Ombro a Ombro Brilhoso
      </div>
      <div class="price">
         R$ 390,00
          </div>
     </div>
    </div>
 
 

    <div class="product">
     <img alt="Vestido de noiva, em zibeline, com decote canoa - Off White" height="300" src="https://cdn.awsli.com.br/600x700/819/819677/produto/129115405/photo-output_3---2024-04-29t151333-486-vb7s1fa89d.jpeg" width="220"/>
     <div class="details">
      <div class="description">
       Vestido de Noiva, em Zibeline, com Decote Canoa - Off White
      </div>
      <div class="price">
         R$ 519,90
          </div>
     </div>
    </div>
 
 
    <div class="product">
     <img alt="VESTIDO MIDI ELOÁ " height="300" src="https://40791.cdn.simplo7.net/static/40791/sku/vestidos-vestido-midi-vestido-midi-eloa-p-1714619418381.jpg" width="200"/>
     <div class="details">
      <div class="description">
         Vestido Midi Eloá Branco Abotoado
      </div>
      <div class="price">
         R$ 269,90
          </div>
     </div>
    </div>
 
 
    <div class="product">
     <img alt="Vestido de Festa Luxo Rainha com Detalhes Florais - Modelo Especial" height="300" src="https://www.moncalieri.com.br/cdn/shop/products/Sc9615c43d42c41e790f55abdb93632fea.jpg?v=1679265594" width="220"/>
     <div class="details">
      <div class="description">
         Vestido de Festa Luxo Rainha com Detalhes Florais - Modelo Especial
      </div>
      <div class="price">
         R$ 3.699,00
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
