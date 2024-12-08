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
         <img alt="Blusa Feminina Estampa Floral Manga Curta " height="300" src="https://images2.marisa.com.br/medias/sys_master/images/images/hbd/hb7/16364984205342/Blusa-Feminina-Estampa-Floral-Manga-Curta-Marisa-10056497021-C1.jpg" width="220"/>
         <div class="details">
          <div class="description">
            Blusa Feminina Estampa Floral Manga Curta
          </div>
          <div class="price">
            R$ 24,99
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Blusa Plus Size Feminina com Alça e Botões Marsala" height="300" src="https://images.tcdn.com.br/img/img_prod/917802/blusa_plus_size_feminina_com_alca_e_botoes_marsala_668_1_8689239017052296192e9230ea1b3370.jpg" width="220"/>
         <div class="details">
          <div class="description">
            Blusa Plus Size Feminina com Alça e Botões Marsala
          </div>
          <div class="price">
            R$ 79,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="  Blusa Manga Curta Summer Diva " height="300" src="https://divamoderna.com.br/cdn/shop/files/S8fd96d6efad34e72b30731b210b06a17g_659x.jpg?v=1724355505" width="200"/>
         <div class="details">
          <div class="description">
            Blusa Manga Curta Summer Diva
          </div>
          <div class="price">
            R$ 184,90
             </div>
         </div>
        </div>
    
    
        <div class="product">
         <img alt="Blusa Laise Zoey Bege" height="300" src="https://delightstore.com.br/media/catalog/product/cache/1/image/2000x2600/9df78eab33525d08d6e5fb8d27136e95/1/7/1731-caqui.png" width="220"/>
         <div class="details">
          <div class="description">
            Blusa Laise Zoey Bege Abotoada
          </div>
          <div class="price">
            R$ 459,90
             </div>
          </div>
         </div>
        </div>


        <div class="product-list">
            <div class="product">
             <img alt="Blusa feminina Plus com estampa floral, botões e mangas longas " height="300" src="data:image/jpeg;base64,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" width="220"/>
             <div class="details">
              <div class="description">
               Blusa Feminina Plus com Estampa Floral, Botões
              </div>
              <div class="price">
                R$ 110,84
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt="Blusa Plus Size Feminina com Alça e Botões Marsala" height="300" src="https://brusshop.com/cdn/shop/products/S3d4f3f48921444ceafd7e209ad5a8b58I_750x.jpg?v=1697036333" width="220"/>
             <div class="details">
              <div class="description">
                Blusa Feminina de Renda Lannie com Botões
              </div>
              <div class="price">
                R$ 237,00
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt="  Blusa Manga Curta Diva em Malha " height="300" src="https://divamoderna.com.br/cdn/shop/files/Se74502e43c58455ba0f3f3aa658d5330V_661x.jpg?v=1724350214" width="200"/>
             <div class="details">
              <div class="description">
                Blusa Manga Curta Diva em Malha
              </div>
              <div class="price">
                R$ 219,90
                 </div>
             </div>
            </div>
        
        
            <div class="product">
             <img alt="Blusa Feminina Com Babados Em Renda" height="300" src="https://images.tcdn.com.br/img/img_prod/636292/blusa_feminina_com_babados_em_renda_1719_variacao_3633_1_9f33c191809130a967b5d916787e1718_20220726104632.jpeg" width="220"/>
             <div class="details">
              <div class="description">
                Blusa Feminina Com Babados Em Renda
              </div>
              <div class="price">
                R$ 229,90
                 </div>
              </div>
             </div>
            </div>


            <div class="product-list">
                <div class="product">
                 <img alt="Blusa Feminina Algodão Gola Alta e Manga Curta Camelo" height="300" src="https://s3-sa-east-1.amazonaws.com/paralelo21.img/produto/4241/blusa-feminina-de-algodao-gola-alta-e-manga-curta-gisele-4241-large.webp" width="220"/>
                 <div class="details">
                  <div class="description">
                    Blusa Feminina Algodão Gola Alta e Manga Curta Camelo
                  </div>
                  <div class="price">
                    R$ 104,90
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt="Blusa Feminina Manga Longa Canelada Preta" height="300" src="https://img.irroba.com.br/fit-in/750x1200/filters:fill(fff):quality(80)/villaven/catalog/4561/6-img-8003.jpg" width="220"/>
                 <div class="details">
                  <div class="description">
                    Blusa Feminina Manga Longa Canelada Preta
                  </div>
                  <div class="price">
                    R$ 59,85
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Blusa Cetim Feminina Verão Sexy " height="300" src="https://acdn.mitiendanube.com/stores/003/275/653/products/htb1idbgsqvok1rjszfwq6aicfxad-bd914383f0123f640d17018278807710-1024-1024.jpg" width="200"/>
                 <div class="details">
                  <div class="description">
                    Blusa Cetim Feminina Verão Sexy
                  </div>
                  <div class="price">
                    R$ 106,99
                     </div>
                 </div>
                </div>
            
            
                <div class="product">
                 <img alt=" Blusa Plus Size Feminina com Alça e Botões Preta " height="300" src="https://images.tcdn.com.br/img/img_prod/917802/blusa_plus_size_feminina_com_alca_e_botoes_estampada_25_1_fddd9daaff4f6ad92e588b303d6d7f6c.jpg" width="220"/>
                 <div class="details">
                  <div class="description">
                    Blusa Plus Size Feminina com Alça e Botões Preta
                  </div>
                  <div class="price">
                    R$ 79,90
                     </div>
                  </div>
                 </div>
                </div>

                <div class="product-list">
                    <div class="product">
                     <img alt="Camisa de botão de linho de bambu " height="300" src="https://m.media-amazon.com/images/I/612zq7I190L._AC_SL1500_.jpg" width="220"/>
                     <div class="details">
                      <div class="description">
                        Camisa de botão de linho de bambu
                      </div>
                      <div class="price">
                        R$ 99,68
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt="Blusa Feminina Manga Curta Estampada Donna Verde" height="300" src="https://rovitex.vtexassets.com/arquivos/ids/1800326-1600-auto?v=638593399354730000&width=1600&height=auto&aspect=true" width="220"/>
                     <div class="details">
                      <div class="description">
                        Blusa Feminina Manga Curta Estampada Donna Verde
                      </div>
                      <div class="price">
                        R$ 49,99
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt="  Blusa De Alças Estampada Floral " height="300" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExMVFRUXFxcXFxcVGBUYFxcVFxgYGRUXFhcYHSggGBolGxcYITEiJSkrLi4uFx8zODMsNygwLisBCgoKDg0OGxAQGi0gHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAQMAwgMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQMGAAECB//EAD0QAAECBAMFBgMGBQUBAQAAAAECEQADEiEEMUEFIlFhcQYTgZGhsTLB8CNCUnLR4RRigpKyByQzwvGiU//EABkBAAMBAQEAAAAAAAAAAAAAAAIDBAEABf/EACcRAAICAgEEAgMAAwEAAAAAAAABAhEDITEEEjJBIlETYXGBkaFC/9oADAMBAAIRAxEAPwBskR0BGhHYicpNNGERuMMccD4xTS1HkYqC5BWGAJ45cT7AHzMW/G/ARxBHiRaEU8S0Jp3y/wB1O6+udzT5QuY2ArwuEdTAgpS6lHQkXIf8Is58Bc3XYidUszA/3lJfmLW6LQfTSGOOxJ7soACE3dCRYJzPMqyAfVWmUK5AKlMTYqSnlqVNyFh0AjoGyCNmkd5MAyMwHwZ2PUFUWiQnvVoSd4Kuc95P3EvzdI42VxipbNG87Hee54hRpH9r+UXTAy2UOaZaE/1kgnkyQY6XJsUNtsY9MqUqar4EuQ2a1Nm/E5J4AE5gAeYfxa5qlTVneUbgWAA0SNA7Dwh525x5mCWgEhPxNlun4HHQA+EIpCbAQDYcIjvZu0E5GxhzKxAMVuTgQWct7xxtXGKw4SZYBdQSynNi+oNjC6t0UqVLZcZTGM7UCjATzk6UAH+YzpTAeAJ8DCY7WKEy/sd5Ye01gPi07s6JfOOdpd7NnIw60pCCCpIBJClkKAUong7BgBvE3vBQjUrYvLkTjSEnZdZGMkq/EsA9ShY9wI9UwoCZcsJyCEgdNPSKD2awNU4KSH7o971KE7iT+ZRI8Iu+ysOZUmVKJqKEJQ51pAEMvZI+AsGMJjkxqCsyjsRjxGVRquOs6iaqNG8QvGPHHUd0RkcPGRxwHGPGGNQYBt43VHMaJjjCLEqABKtIruImFS2AdTsANDp4+z3ZjDXFLMxdA0z5czCzaC5ctBSk2ZlLyKxqlOoQTmRdWQtZSpPY+K0JdorAsDUAbkfeULbv8qfU35ATChs9AT4kOo/2pPnHFVauQz5AZC3TLRgIjmus0oDkkSwOJJBmdbAJ/wDY2JzHOy8PUXDtbnup18E36+tpmS6E/lC2/sUlPofOEuKxUvByUhwSCkKJuS7VHozeBTxFNixKaklOZot5mX43lv8A+x0jYlT7T4fflnjIktzKXCvr9YXYaVd4sfaOQ8rDKbIrlnoCVJ9CYTBDQlsfBE6FQu7RXQOSgfKDQYFxqKw0ZF0w3wO5JROlS1pbdc82UkgepI/MoCM7TS1BcuaFEBII/q+76VeUJ9jzTJcEOkvoCz52NlJIsUnjpDSTPOJxEmSS6AoKLi7JStVybqdmvxLvmWWhLiyy9mtm91h0P8a2UvKwuUp8yS3Ew2eI1YhAAVUAlWRUQHv7u9o2iYFB0kEcQX9o1fYhvZ2VRqqOFqjh4I1EyhHIiOuNhUajToxjxp41XHHHUZHNcZHGAxjUZGoMWjZgDaeLoAANz6DUwcpTRUNszysTC93Dck3gZOkFFbOp+2Ep3UB+LnP8zG/t1gGYmZPcnJPxHJAP5jrduQyZ7g4CWkb0wsjRIzWrLS7Bmt0fOCNsbYSEJSlBL/CksEgaMlLDQ/RupKxzeiDFTEoTRLLklipmA6cg4+jGuz6hWFaJTV4qNz1pcwtnBSjKqsFPYWymJHzhjsNBzzJMsDodz/sYalSFXbBduY4rnh8ga1DMOSWS3p0SDkGj0LZc9pUpS/8A8pVT61FAPqomPONoYU/xKwkOSpNI4uBT7xf+0iu4khAN/sJQ4kpZS/RI84GYcRt2mw3+3/IsK90P6mKgoRcdoTxNwpUC4KEjxCkA/XOKbNmgWidlMODkpjQTHCp/AGOpYUch5xwZKlEawmJ7uelYs3k2r2NmJDsWBMEycIdTBH8IgXIfrGGtaNdosWFd0AXSA72tUrk7HdHHiCQQSowBANlLSQVAUkh88mjJsx1Glk3twD/s/nEuFmJE1gLVK9Rwi5Ko0eK2nJv9hC9rz0KITMW261V9OfOLvgaVy0FRLlIJ6teKBjjvi7gtcatXDnC40pQkDgIXldJUU9KlKTTLgMCk/CrzgXFSFSzcdDoYB2NtIuxi5y8OidLIOvmDoYCEm2UZYqOyrBUdAxDMQULKDmCR5RijBiiaMiCsxkaaZGNGxGQQpAe154RKWo8G84q+GTUsAvvpD2sKjYNod5J8RDztHdKUnInLjy8XbxhTIWARwBz1JLBwPxEXc5AtxhU2MihTjsAUTaNAgewJblY+sAbXwiqkaChBHPMH1EWHaWKBWmZY2WSOKQp2H9EwiBtvsoSW0K0ltR8Sf+0ZDTNnwDYrDUpQs6Kt4gr/AOnrG9hy6SRmUgEcyhQPzMM8XKrkrGomBh+Ww/ygPZ6RUSC7LHkULf0SfEwbYCQzwuyhM2hLWAaEoC1E5Ay3RfmWR68REnaddeIQnPuxUeNa73/pp8zDrZoEqRNmK4BI5gAEjzIT4PFVwk8zSVkuol1dTeFvY1UmWDCzWwU7lMSkeKkGK/hpbkk5vD9aacCBqueCejKb/CFsmU0KZRFEfciJpSBHdMaWoJDmO5GWoq2TIELtp4yzJyfzP6COMZjgUsDnoNep0EAkDIk1HyHJopxYq2zy+q61TXZDj7JklFNRHUaqOp+uMRyJxrtYaueI6tG2cG/lGISkKL8teUOZJFk+IVvJDaadVZwdIO6OkLVqFQZ2AF78SIZyJCqAWtCcvCLejfzf8J5Exi8W7Ym0DZjaKaEEQ82Stmiduj0HG0Mu0Q3wv8Qv1T+xHlCoTYa7bDygeBHkbe7Qglqh8HaI5adBnexkDVRqDoyxmI3GCMMaAhB2hXvNwT7/AEDCwKFSUsSTfkDYFZ1YMfG92EF7eURMskKJDBJyJUpIHTJ7XiGThEy5hWtYqIKQlIKlAHMqpG4eA8+EIlyOQrxaK5plodRO6LazAwAGgca6B+QP2ts2ibKRU7l2/llooLnmpQ84kGKlSqly0Ka4UtV7m7Aj7x4O5bKOMNNMxRnG4SlgOJsbcASQAOHd8YJAs4RMdKhmFzF+5I9oE2JLNxzR5lM1PzEG4dKUFKT9wKfmogu3n6xL2ewyjMFQFzKVyG9l5KEazOCxbqkiQ7slNY4FZLHpXSPGKpiT3ZB5kDLIagiG+FX/ALiYtKnBzy+FylhdrNyux0ML9sEVqOgXY8iDlw0jcenRNl+Wx1iS0qSjlV4t+5gSmIttYv7ZKB9xKR1ITf5xPUGBGsJyQa39l/TZU7h7RyYA2hiQkNy97CC64SYldUwnQXHhl7GNwRuVgdfk7cdfZApYLDx4DgBDOTguI4knkzkwD3wfiLsP1h5hKKVA3ptf8LOn9PCLDxqBFpIJAAuBl9cYgo+0A6EZ5s8FTBc0uUs1825Rxhkb/T9NHjGNgjjESiSdSwyfiow32JMC5ahqmBJksBWWVGemo8bxJsYULUOL+LXHpC57iU4H25V/oKmJAg7ZxhVPn3g7AKiNnsDzGqeSv8p9LxW0Kiw4g/ZTPyK9jFaQYfh4Is/kTVxkRxkNEjcTY2VwMmUt/hv/AOfqInTh1tcfXj9WjTRHtlX2gZgWBKj90b3C7/pCSfOtSi5ILO2j3pslod4+RXNUkszAkn8KQLdHU/8ATCGWi6hL3iXdSny5cEgXJ14aQh8jI8AUiWqZMQlaqiLCo7o4gJ0HIcItqUBCAOFxcPVcqUT1e/F9EiKciayjT0BNnLgEnhZzx06t8RtEzUUjJXxFhckubCwSPZoNIByoHlLsV5qmKoR0LAq6AP5iGWwp6lqmKe1kI5Ord/xB8THUpIUEhLhJ3MsnBY3zL3gjYUpMtaEqG6TMIK3upmSTlb4s7b8E3SE91huy9npmqShS6FE0vZgnMDko5XbziDbOzUiWXUe/TMMtaHBSQkilQ4O46vEa8clEukgqWpakk2YAkBjxbu8v5oiXiHDuLpc8ynn4AQMLezHJIX7amVTlqB+8QONrP6RPsye+6dfQ/vEU5dRJt4cYhUSCDyGVrQ6UU40IjkcJ96GmPWEp5m3hrCOQCd4f+DSCsZNrYAk8Tw5dYFDpPvz6c4HHDtVG9Tm/LO1wY28B1fztzMNcOlIvx09vG8LZU0DL21YZcYLlDjezgX8LawwQMJstrA8Mmt9fKOcGlNRcNcsrhZj9c4nULfCNLW4RxhEkqNtC1uKuMC+BsCSaA6nAIcMbfdA9jAYV3cwkZaeIg9BuVUuBUxbiTY8YW7RYFJydm5sWgWtMbF/Nf1G5ZJPjD/Cy7QiRZjFiwZdIiNntoPmD7Jf5Ff4mK4iLOpDy1DilQ9DFXlw3DwRZ/I7jIyNw4SXLu1cKrtZKvnl1jnuFKIASSnUimx1HxO/hDsIDu0ZQIwE867YYFSHULCYUy05atVrlSknztFW2g4QqgMlSm6pB16kP9CPTO2GAUuQ6RUoLllIybeDkkvZn0jz/AGjs40lExRNAIpG6l0vm1zfjC5aeyiCtaKxPIWsUndZiRqWZh0e5grCTCJqUuyWIbTJ/O0SJlgqFhYMw04nzbyiCdZQPAvBN00JcbTLHJWS1wGucwzHUa2Jy5wdj8U4bu3AcmYsqSAHLFkLYm7AZlhCaXo2XG9wQ1n6w3RK7yRVWh91kuKg2oSLkWz6QU0TxdieVJJIfdSSC5GQqSHbVgcoOnoAACVAhyGyzHPL6yixbCKkoVLld331W9WzGTTmFGzBRLjOybRBt/CoWorlUsooO5upKqd8p8Q72zjoy3QUsdRsqiUesS0W5+PpHclJAy1zc5+zRk7L64w0lkmDqA/eIZoPGC5KAc3/WIZib2jgDc5Fh6N7xLIUUupmbwiOZmk+cdrSQlVsr8r/vGhIbYa4ClKUXPlrw4R3ssAXJ1GWdnNzwiOTMJGdrnLlkPGJcIAJaiwBpPiabEeJgJDoGYdCSm5uyXA11BMI+1Ewd7KSl7IBI5klvT3iwS5baBxu6EfTxUdvKP8Uu7sUgdABGS4HYFcx6DYQ92YrdEIkZCHGylsGiN8HroseHyirKRSSngSPItFqwpcRXMelpyx/MT53+cMw+yTPyDxkdxkPEDs7bmBTul+NCHa5zbmfMxi9vTNQjg7F2d+MJ1F2PEA+kRTIFvYaSodYrbU0hwUv+RJtwciKtjCuYo/dqLqNgb3NIFhBSieMcEQvI9WNwpNtCuZhAhLDxMJ8TaLJixaK3jxGR2ZlSXAwwrUIVnb1Fi/lDnZc+lklIUCSSgpdwxdlXaxJtqAdITbMl/YoOhK36hR/aHOw1TAVUIKt0hXIKYC/VucUPcbPPVqdBOG2mUSu7ZDEXLEkpIAvdrNaGuxsGmaoJOViQGukA6ufQWitYmsKqUHcqcWdqiCVJAtccIgw6194DvpAFu7UUkpJAIcWN2s2sA40tBRkr2rGmLwSQqYpKyQlSmfNq7Avy9oBWipBIvbLXO5HKDJuLD23nBJ82uC13ezR0kJ7l0qzqu3MNYDKGJipLTFCEADO0RlL2a4gk3B6X/WBy+TW9fCCEGTGCQ768OkcJmKKWqfP9ohxhuka3fwyjrDFmjTUFjEmkkJ0OmWhhrhSe7USm5VYin8SRCpKE0kjMjoHJAeHUhKRJBrB3gG0DKUp24sk+ULmynHGzmWTu2HFgRd8/aKptaWf4tbhnUD4EBouGHpKgynZPHIhgOljCjtHh/t5auII/ty/yjJeI7BqZLLyEHYFbEQBJNoJwyriJT1EXHBG0INq/8y+o9hDrAHdhLtUvOX1HsILDyT5wZ4yOYyKCY6wy3lpPBx5H945XEOylOgjgr3A/SJ5ggZcjI+JCTGjG1RGpcKy8Ibh5ZBi1Wiv48Zw8xS4S4wR0DMo32ZKBwst+JPmtUONjY1WHWsCkpWneSoOCz5frC/ZaP9sjp/2JiecpyEpYFsxxe2tofHcaZBkbWS19BuMxAWozCpIXUmtIVS4JWSQBcsAm99RHUtCAtTA5qAYvo7uR4+MJMdiiGqBCiA7Npmxa+VuvGJtm4h6hvngTvHJlOLcQdWY9YFJRdgt2g7ESkh1AXBABbKoB7/WkBoWE4dJqIO84I3baXtdwbcIZTV1IUDayXvdmubeGsV/aE1VIkVJKQ6QQ++Q5KjoT8/CGAvgnXLdI1s5bqA0QBIza3WJNnkEEGzG2blrG5GjHyjnaIyZgDcuchpb6yghDQsxiQTVx0ewGeY5e8bwSzYJFiHucmzbzjjuKmFTEOBmxAJe/DLX3hhs3BsCcrkADh+/yEaFoJpZIyuU+dT+TRYkA91LICQPiH9pGeX39Ir88MnIiw4ZAPr9ZRYkICUS00lyGN7EtLFr/AM2msIyFmHglly7qUlIACQNfvKLjruiEvaGU6Uq/CseRBHu0OZDUzCxczMzx331y4Qv2mmpCk8vUXHtBRVxNupJinDZROmA8ObRO8Snpot2y17ohTtH/AJV9fkIN2Kt0wLtZDTTzAPo3yg8XLE9RwgRoyNRkPJQTYh+P+n5wdOEK9hzGURxT7XhpOjJ8hw8SBUCTDBa4CxMKyehuLVsGnqeF+JEFhTiAsUuNiZNlhwKfsED+UfrEqbl+DcyLgvziPZ5Aky3vu5cfoQOX7twwNt6/B29hDFwQ5PIK2kgBQsHCcuTlx5RJs1YSAybqJOWtBzawgQqIUVqSkOlJAcl8zwYDT1gzZxKgyUk/dYakJ0GpgogS0dYuYlIUbBwMwDvFObEXH6RX581BBSnfUp9Eto7H7os5I1Frw02jiMki1gevOEeGwjsQWIctYfeFzxfODF39jDZyaSEnNgztlxDW09OcZtOkqBL2Ckl3YPqzvk/1mMhJqStN6VM563AH9w6q5QZPCZk2kkhlMlgkmyXcuM7nPK0aA2B4WUDZRLAmxDOHYPwyfKHUlYAY8S3Vs4xQpKQzMMv0jSmFvF/CMBbNTQxTUQbpfla5J6Q7XiAO73xZKuFv+M2D5wqWjJTWDXPSGHe7yLBqVcL3R8mhc42VYZ0gp2lllVAq5cA1+TtAUwx3iJ7pUct6w1YAD5QtXiWgo6Qb2L0ikkcCREiVRHOmbx5/pG8MHI4RNJbPTg/iiz7Cdom2/JYIV1HzHziXZYsIM29K/wBuo/hY+rH0MZDyBzcFUqjcD98IyKKJBbsxZExHUDzt84eTDeEeFASynLhjkBlfjBJ2oSbJEE1Z0JVyHLELtoZQVLnFQBMDYyEvyKF4gMmwgDFm8MlC0BSUVTUjSoP0FzHIXN0iwpTSlKWelIHiweAcUghACQKlWvkOduvCCp68zp6fV4DmhZKWpYG6VBwRpfTL15Q2qVEKfc7ZyZZAQBZgLBiAHfJ/5YZdntrypFXeBTFKwhSQ7VNvkAg6kWvdoUd+AoA5uQwyDWa+Q3h5Wix4CXhpUolSQqYS4JDjeApCARbU/wBUDMOHPInVLrWSFKW6tQU5WACfuhmhgjBoAcgF83DtlaJ9moSZiAVJrIBFKhQCUkstSjol73DhIg3BYITAs96kioJcAApIuaqRbqbCOWSK0dkw5J3J8/QtmyQG3c3Bp1AZi19YI2dIBX8AsGc58n1Z4WDGoRN7tJBdRFV7gPe9znnqYe4WWGCnucr2LB9DzhieiWUalRrG4YWcNYNm7atxyOfDrA07Dhgwa5z14fOJsfPpvmuwGouWfq9/CA0bURNVSoFLhO+3wlhvEZ0535+WdyToOOGU03FDGZJAlFNkkM73Fjd7cC3hwhdjMUhCApXC4drMk0sfblDXFSgEkG5slw/C5DE6woxmHVMQwllbXpSCpQ1dxkz/AE8czYB+1hKQgFMxS1KOtOTOTYuL2uxtCJRhmlcqYE1LJJBKbJC1KCSwDsAHUHBOYYaMp6xkOCnngjCXUYOwwuIglJg3Bo3hCJ8s9DF4ItGzE2EHdoQBhZv5fcgRBsdGUcdtMRThin8Skj1q/wCsZBbF5WUSMjiqNxWS2I8HtCqxDK9GYvfjyg+UYrkrEhJel8mL0kHlmPMQfgNplS0ICRdQGZNtYKUaFp2y0y7ADhA+JMEJgafnEcWXyXoGnrYRxseXVM+syW/WIcZMhvsKRQEqU286i5ZgASnxcA+MFdbJ51J0D43E0KKVP1SxDOY6AChMU5ekJGZJLAWPAMSPARrHYbvEVEl2CQWLBbip+Oh8Ih2RiEkJf4h8QJAJA14XPzg07Qice164IJyVBCVKIsSeNkj4gPEDxEGYHaCDSgEndSLn4Tk1+bnygdTKlqfNSaUjUJALW4lV/G8C7P2WhaghcxaCRTTRYnTmBcm+cb+wVVU+Rr2nx5EqWiWRLSkKFCHddJAdQBNncDQ0k5NE+EUhMpQG6xZlClSWWCajmTfPUNwiTYGyXSZJBMyoGXMSaaKSCaVqBpSWfLUtDpakd5KnTjLXWlTKQCsFIsFFwO8YgaawvuSHSg5rf8sD2bseSKiklUxKUrVUkhJRMyoWcwDpa7x2VopcilzqQ6TyGpt5dY52gpACO7IAoBmLlpKZalsCVJQ+6CTrAy1BKCog1n4n1Ni4JyOtoODfsRlgk9G8XiARZQKjZrEVEhtXDM4bnA0qSulUugGk1qNO8ndpLqFwLcLeERInCYyXLuGI+Ng+TM9mHhDDGTVqQQCxH2bsx3UkEG92d3PAcIHJHY7p8jiqQTNmpUkpBY8KgFUhTBxx18RE2CmFlSZZWkqKGXKISqyiWSq+lII5npFROIX6BnJZmD8OI8otmzFzFy0zEpYMCS4TcbxUj8Vr2By4sY7v7lsOWD8TTWw1KGrWvuqppWkrQkTkBaFOsKDOoskoUWfLhCHbMlKZqigMhTKS2TEA7vK/kRDGftNSildlhLqAlpZqlXLarPE56cxZ+05E+QAlbLSXpWkpJezIZ0lgBrGY1TtnTknpC2SfeGuy5bkwqw4cmLHsbDs3Exk1sqxP4IseARSmKp26xe/LlvkCs9TYex84uMpLCPLtr4zvp8yZoVFvyiyfQP4xmPmxeR6B+8jI5aMh/eJ7CoS1AiGnZ6S89Jb4Qo+jfOBNkrSlbXZQAu1lafMRacBLYmzW9/8AyHZXUGKw7mkMmgOeYKJtAGJVaIol8wKVhzNmBAIDvc5AAEk+QMWPGoUBTY3SknJmAqbgLGK9syYUzkqAqpc0ljUAC4Y8nhrtKYonvJRStJFRZLMSxpeljZWr3qGkMRDMHM4ME2qI62cuDA8zDpSQoJSNC/wkZmoaCzW4wQJsqYCpu7mFQFPHQlT/AA/ElrkXN3tEqMOJhS6iEqSoJKaVVqLUJG8NQOuVneN9C6dmsBhisJZwkC+dyM1Mc3L35Q6Mu+RKja2YfMu2egyyhXJmLRUJibCkWbdSQ4Lh9C+T3vDTD41EsqAW7G5LpChe4JF+l3axuI1vVI5RfsOQE4dKiJtSgugEBe7MSL5Dm1nBZoXbQxO+gzFLUSG3aXCbXCXAAAc24jwPw+MTMSAgMF7yTdZciksEAkhzmWYPYAQoxswVGXZaqjZAJZnDgi+rWLQpf9HTTS1wdTlyVbkuc5IO6UUkEMdU3dhlxjrE70lJcOSkWIFyDYgZAZ34RzLw6wlSXD5GoOXyvSxdm4xvaUwpCJJKHCkqWWVSA6QCpwz1KH0WjbBr2T7JEtCV11AUgJAI3VVFhfIGz9YI2lLlkLUl6UJ3ySBVNzAfUqv8LtmYXJDh0lKrBVVADKCi9yok5PycRqfvpClCYyEqBu7BgnjYEBy1xvWygXzYV/HtBMaLBTAGk2SXBIcHd0DtY3t5spaiyVrO6Aoj4UgLpLCsAmWk5VAO1tN6PEyUlVSUsd5w2uhbVx6wYJyWqDUFKnqvupBa+pf2Z9YL0Z3O9u6O0lK1Huwky7k1FIcPvkhTEgEgORwPKKzicIpIVMlhwiaokO5oBLkOLhnbPW8G4zHTJjowsiYoP8YZKFD8xABGR6iIMPsmcQUqVQMi1JJcXNibv8+MbH48nSi5v4pnX8QW+zQtYzNBSnL+ZSFPmLMMnuCIe9ltsibMEs30YpAmgtbdSWmJsQ4CTwByibZmHSkJQnJIAD3sIL7S7HeSrESkDvkBwQwUkgf8iS3xDUZLS6SDZsWSLdND545wWmHdqcb3WGUQQ6xQkg/izI6B/KPNQmJ521J09LzDulS1oFmQXSlaABkzpJBver77mNC4JRpAKXczTGMiTvOUZGUNoJw/+n8wlxKUD/MVt4MlI9YkxWyDhlhCmqKQos9ndgXUb246x6zPU3xEDqW948z7RT68VNILgEJDZboAt4gwWSTaoDDFKVgKzaFWNmQxmGFU9BWtKE/EohI6qLD1MAkHkY/7N9kl4iT3pIAXUA9nTdJLjeF3yY2hFidodytcpLilZ+CakyyoKcEBUlwl9Mo9J2/i/wCDwIlySmsJEqW5a7XV1Zz1jxtWHXqhfVifUODFmHApq5EWXJ26Q4X2mxKKl0oNQYqUFE3ZwooKXFh9EwsmYudNNlplrJH/ABoQEkPVe1R+F7k/DGpS5gDULKXyKSGGrEsPD2ziRSUSrhqi+ps4zHC2nPkHd+CCfAr8kmNOz+Exs5KiJkspSoA1y82/K1R5XNjG5G1FikTEUiklKgpkKDD4EzAyiU05LOQA0EJpGNnS11ypi0kht1TWD5tY5mLJsPt7isMKFJRPlsfs1hkpcvuAWTrYWvAS6eL9GrLJezhM9ASUm6iVJClhKiFMBuhEwuzkhi28Y7RKFUtCWE10qFMuaVkoAWVJSlJuwdr2EHSsTgcQtM6SDhJ4Uj/b3VLmg2UZKmZBFyQwBZ8yYb7RdKipAkhRSistvFJlAiu4sk0KZ3NCyCnRT6dfbD/N+kIUqCUhKWE0BIXvUu1VbpmBJc1BiciAeUdqmLTUJagKwCaloJcLQdwlRDsGvZhoYYpx65apjKlJSpK1d1iQtkq/EiY+4bipKTS1Jp36hy0vESpKlSJyiUTFkS0CbupmspnKbkF0A5gasxB9P+zfzL6BpmHDBEuul1OxSo00skAJUSc1a6aRyjELoXWAlIATQpJQVsKUmlLXtwNgNGMA4jDoxEwpTK/hymXVLQQN42AmTJm6spIUlVICyCGu7EnDdnMSkgrnTUyQxSKiFm1zbdTmeZvYC8Llj7VbYyMu90kZh5pUoy5YSpVVZmCoJCVU7vxMPLTi7vcLgEgAzj3qhfeakHiE69S8RrxCJKAASeDklSibgXuTEaFKO8o6WSMgOfEwh5H6LMfTpbYXNnvllELxCFPEilNCmytKiWRNYxbNmTnSBnFJE0OBqco62ntilBky1sTZSknIGxSk6E5OMtL3GJOT0Ky1RW5MtKO8CC6FrdLO1CRSg+N1PzESpSI2mSNI7RKipskUdmd2OEZE3dmMgLG0elKkIS7SpaAwulNCgBeyksW8Y8xXOK1qUc1KKvMvCrF7cxKsUEKnLKTdnpS3dn7qGBvqXiwbG2YqdllDMumhWDdsCmqtHHZydLGKSuYoJTLBUHOaskj1fwgntJs9UgXyjznaE8qWb2FvHWCxqwc0u0vXb7awnTUhCqkJTplUTn1ity8WsXq8SAT5kRFhkfZJfg48YwJbRxHq441FI82UrkySfilq++fBhn0AMCqlc/3PONgv1jQfSCaONspOfgY67wxIZ7sCP0/aOVgXIjqOJsFjzJWmYkAlJcA3BMWvB9ukLdS8PMQqkJqkzEqLABL0rSLkJCTfLwilrQzGOE5FuXqbQEkaj0XD9tMExBXiZL6GQhaWYgpKUzCCguN08CMlEQu2x2+mSVJRs5aESqN49wlArqVZKFjdDMbWNV3LxRZ1rcIIxKbhOoSL9HBbyhLQQ02l2qx+JAE7FTFAaClA52lgP4w4n9vJ6pIl90FKf4gphlqlnEVNAjai0C8alyHDI4cF42EisGatVU1yFfhQklwJY0SQBfMkHhDY3jz/AAO1Vy1ApJ/bUMbEcjD+T2kkkCvdOpqt/wDRBHtEebppXcdnoYOrjVS0PVTgMoHnTybJz16nIDnGYDaMpRs0xjkgpVbRykkDxaIsXh1zJz0hMsFkykgpYgBiT95TjhmrQPA4ujyTe1SCzdZCK+LtiteLL2MRoEB4x0TFpByUW6G6T5EGNysVxHlBvH26QtT7tsZSlEQZKVCyUt8i8FFkAryLZ8eo1/aFNDU1RMZ4Fqj5RkV1WIWS9RHLhyjcb2GfkQTLwpOJr07sJH5ipX/Uesew9mcImXKAA0jyvDXUgc38z+0esbLW0sQOWVzMxRrGU7/VfFJTIf7zsPryjxeL3/q5jirEplPZKaiOasvnFIwyXWkcxFGCPx/pJ1Evl/BwEpYC7hhpoIyotn5x2VmOlB2+s49ZHnkGZuFcLF43Lkud1Y6Gx9c7RKeGWZ8Xb9YxKmDqHHnHUdZDMSoEuMs2iMMdImqbJRHqI5XiG+IA8xHBJkanDaiNoFj+ZHTJZHtG+9S+dsrxorFKmGqfZf6wMgkDzE5wbihv+f8AkqA2JsBc2HU5QTizvWvl1LkqHvCGgjCgPGTdCByP10IjO8+ubfrE6Z+njl5/KDijmCzFcm8Gg7Z20MSgUy5pCQ+6WYPmQ+WQibApl5zEuOtvIQ2kpwQNTEasSWfxLtzhigA5EeCxWLUq84BslJSKg/8AM1s+GsTnCSpe8qauZMJFgb+kM8PtaUGAA8Evfwv9COlTQbpwhv8AeopfXNQDiHqIuyu7eSVFM38QZX5mqSTzKSP7YViZFr2igrlqStBSpQJS1JdSXUkFiW1D/wAza2qLR5vUwqZfgncQzDr1gjGYklIS/PLQNrxdvI8YHwgsY3NVE9FFkUZHDxqNowtfZ5IOIS4fd+Qj1HCJFEZGRFLzZRHwR4N/qQonaE59KQOjQj2Z/wAifH2jIyL8P/n/AAedn5kNpwv5R2BcRkZHpkRO1vA/5GB5tgSLfRjcZHGg05ApfX9zEUlVyPrKNRkZ7NI5iRwiXZnxNGRkA+Q0M0YZCCClLEoUSbn305ZGAgkOeZL+cZGQBpDOgcFjGRkajmMsPLF+ut4PwwYlgBnoODxkZDRbLFsiyw1vi62BIv4Q2RNVxzC3/puI1GQ2IIdLlgmWSL1y79VpB9I8xxSQJiwLAKUAOABLRqMiTq+UU9N7CcLkY4mxkZERYRNGRkZGnH//2Q==" width="200"/>
                     <div class="details">
                      <div class="description">
                        Blusa De Alças Estampada Floral
                      </div>
                      <div class="price">
                        R$ 92,48
                         </div>
                     </div>
                    </div>
                
                
                    <div class="product">
                     <img alt="Blusa Feminina De Linho" height="300" src="https://images.tcdn.com.br/img/img_prod/636292/blusa_feminina_de_linho_com_camadas_elastico_lastex_2201_variacao_1789_1_d906525085a601c85be8738f03279e76_20220726104748.jpeg" width="220"/>
                     <div class="details">
                      <div class="description">
                        Blusa Feminina De Linho
                      </div>
                      <div class="price">
                        R$ 279,90
                         </div>
                      </div>
                     </div>
                    </div>
    
    
                    <div class="product-list">
                        <div class="product">
                         <img alt="Regata Feminina Ampla com Pespontos " height="300" src="https://flordecarlota.cdn.magazord.com.br/img/2023/10/produto/1232/tpd-5026-2.jpg?Produto%20=%20ims=fit-in/475x650/filters:fill(white)" width="220"/>
                         <div class="details">
                          <div class="description">
                            Regata Feminina Ampla com Pespontos
                          </div>
                          <div class="price">
                            R$ 28,41
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt="Blusa T SHIRT GATABKN" height="300" src="https://gatabakana.vteximg.com.br/arquivos/ids/372011-475-713/T-SHIRT-GATABKN-31714-G.jpg?v=638572753726230000" width="220"/>
                         <div class="details">
                          <div class="description">
                            Blusa T SHIRT GATABKN
                          </div>
                          <div class="price">
                            R$ 219,90
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt="  Blusa Feminina Frente Única com Torção " height="300" src="https://cdn.dooca.store/154234/products/blusa-feminina-frente-unica-com-torcao-preta-9611_600x800+fill_ffffff.jpg?v=1721136609&webp=0" width="200"/>
                         <div class="details">
                          <div class="description">
                            Blusa Feminina Frente Única com Torção
                          </div>
                          <div class="price">
                            R$ 39,99 
                             </div>
                         </div>
                        </div>
                    
                    
                        <div class="product">
                         <img alt="Blusa Feminina Tricolor Plus Size" height="300" src="https://images.tcdn.com.br/img/img_prod/593567/blusa_feminina_tricolor_plus_size_357_1_1edcc0c08861b8b424fad406f59eda43.jpg" width="220"/>
                         <div class="details">
                          <div class="description">
                            Blusa Feminina Tricolor Plus Size
                          </div>
                          <div class="price">
                            R$ 74,90
                             </div>
                          </div>
                         </div>
                        </div>
    
    
                        <div class="product-list">
                            <div class="product">
                             <img alt="Blusa Feminina De Cetim" height="300" src="C:\Users\monke\OneDrive\Pictures\Captura de tela 2024-12-08 115056.png" width="220"/>
                             <div class="details">
                              <div class="description">
                                Blusa Feminina De Cetim
                              </div>
                              <div class="price">
                                R$ 179,63
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt="Blusa Bata 3 Babado" height="300" src="data:image/jpeg;base64,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" width="220"/>
                             <div class="details">
                              <div class="description">
                                Blusa Bata 3 Babado
                              </div>
                              <div class="price">
                                R$ 88,90
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt=" Blusa Feminina Crepe Alca Forrada Tecido Duplo Rosa " height="300" src="https://images.tcdn.com.br/img/img_prod/845558/blusa_feminina_crepe_alca_forrada_tecido_duplo_rosa_elena_1689_1_6d4265ac3c3cd3dbeeb6cc415d40f887.jpg" width="200"/>
                             <div class="details">
                              <div class="description">
                                Blusa Feminina Crepe Alca Forrada Tecido Duplo Rosa
                              </div>
                              <div class="price">
                                R$ 119,90
                                 </div>
                             </div>
                            </div>
                        
                        
                            <div class="product">
                             <img alt=" Blusa Feminina Social Rosa " height="300" src="https://www.marialimodas.com.br/image/cache/catalog/Blusas/Neida/17-800x1000.jpg" width="220"/>
                             <div class="details">
                              <div class="description">
                                Blusa Feminina Social Rosa
                              </div>
                              <div class="price">
                                R$ 69,00
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