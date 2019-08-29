<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link href="https://fonts.googleapis.com/css?family=Lato|Righteous&display=swap" rel="stylesheet">
    <script src='../wireframe.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

    <header class="wide100">
      <img id="logo" src="../../media/lunardo_logo_no_text.png" alt="Logo of Lunardo Cinema">
      <span id="title">Lunardo</span>
    </header>

    <nav>
      <ul class="navList">
        <a href="#aboutUs"><li class="navItem">About Us</li></a>
        <a href="#prices"><li class="navItem">Prices</li></a>
        <a href="#nowShowing"><li class="navItem last">Now Showing</li></a>
      </ul>
    </nav>

    <main>
      <article class="article" id="aboutUs">
        <h1>About Us</h1>
        <div>
          <h2>An Experience Re-imagined</h2>
        </div>
        <div class="articlePadding">
          <div class="imageDiv">
            <div class="imageHalf">
              <img src="../../media/standardSeat.png" class="seatImage imageCentre">
              <h3>Standard Seating</h3>
              <p>The new standard seating sports luxurious cushioning, as well as adjustable armrests with cupholders!
            </div>
            <div class="imageHalf">
              <img src="../../media/firstClassSeat.png" class="seatImage imageCentre">
              <h3>First Class Seating</h3>
              <p>First Class takes comfort to a new level, with leg rests that raise, comforting you through your first class experience.
            </div>
          </div>
        </div>

        <div class="sub_article">
          <h3>Revamped Sound and Visuals</h3>
          <div class="inlineContainer">
            <div class="inline inlineLeft">
              <img id="dolbyAtmos" class="imageCentre" src="../../media/atmos.png">
            </div>
            <div class="inline inlineRight">
              <div class="factCentre">
                <div class="factContainer">
                  <ul class="dolbyFactList">
                    <li class="dolbyFact">
                      <h4>All sides covered</h4>
                      <p>
                        The movies comes alive as sound is produced on all sides, including above you, whisking the whole cinema into the world of the movie.
                      </p>
                    </li>
                    <li class="dolbyFact">
                      <h4>Artist's intent</h4>
                      <p>
                        With rich quality and true immersion, you can finally discover the film the way the creator intended it.
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="factContainer">
                  <ul class="dolbyFactList">
                    <li class="dolbyFact">
                      <h4>Sound that moves you</h4>
                      <p>
                        With the 3D layout of the speakers, the movie will feel all the more immersive as you experience the world as rich as can be.
                      </p>
                    </li>
                    <li class="dolbyFact">
                      <h4>Senses Excited</h4>
                      <p>
                        With true bass and surround sound, the impact of the film makes you feel the emotion of the film all the more.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="inlineContainer dolbyBorder">
            <div class="inline inlineLeft">
              <img id="dolbyAtmos" class="imageCentre" src="../../media/vision.png">
            </div>
            <div class="inline inlineRight">
              <div class="factCentre">
                <div class="factContainer">
                  <ul class="dolbyFactList">
                    <li class="dolbyFact">
                      <h4>Dolby Expertise</h4>
                      <p>
                        Dolby has many years of engineering film experiences, and the Dolby Vision experince promises to be on a whole new level.
                      </p>
                    </li>
                    <li class="dolbyFact">
                      <h4>Beautiful Colour</h4>
                      <p>
                        With all new HDR technology advancements, the film will bloom beautifully off the screen.
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="factContainer">
                  <ul class="dolbyFactList">
                    <li class="dolbyFact">
                      <h4>Full Support</h4>
                      <p>
                        Dolby Vision supports hundreds of movies, with more being added every day
                      </p>
                    </li>
                    <li class="dolbyFact">
                      <h4>More than just the movie</h4>
                      <p>
                        Dolby Vision is also available for your home, with support for laptops, tablets, phones and home computers.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="dolbyFooter">
            <p>For more information, visit the <a href="https://www.dolby.com/us/en/cinema/index.html" target="_blank">Dolby Site</a>.</p>
          </div>
        </div>
      </article>
      <article class="article" id="prices">
        <div class="gridContainer">
          <div class="title">
            <h1>Prices</h1>
          </div>
          <div class="subtitle">
            Special prices apply to midday sessions on Monday to Friday, as well as all day Monday and Wednesday.
          </div>
          <div class="std1 standard">
            <h3>Standard Adult</h3>
            <div class="priceDiv">
              <div class="standardPrice priceCentre">
                <span>
                  Standard:
                  <p>$19.80
                </span>
              </div>
              <div class="specialPrice priceCentre">
                <span>Special:
                <p>$14.00</span>
              </div>
            </div>
          </div>
          <div class="std2 standard">
            <h3>Standard Concession</h3>
            <div class="priceDiv">
              <div class="standardPrice priceCentre">
                <span>Standard:
                <p>$17.50</span>
              </div>
              <div class="specialPrice priceCentre">
                <span>Special:
                <p>$12.50</span>
              </div>
            </div>
          </div>
          <div class="std3 standard">
            <h3>Standard Child</h3>
            <div class="priceDiv">
              <div class="standardPrice priceCentre">
                <span>Standard:
                <p>$15.30</span>
              </div>
              <div class="specialPrice priceCentre">
                <span>Special:
                <p>$11.00</span>
              </div>
            </div>
          </div>
          <div class="first1 first">
            <h3>First Class Adult</h3>
            <div class="priceDiv">
              <div class="standardPrice priceCentre">
                <span>Standard:
                <p>$30.00</span>
              </div>
              <div class="specialPrice priceCentre">
                <span>Special:
                <p>$24.00</span>
              </div>
            </div>
          </div>
          <div class="first2 first">
            <h3>First Class Concession</h3>
            <div class="priceDiv">
              <div class="standardPrice priceCentre">
                <span>Standard:
                <p>$27.00</span>
              </div>
              <div class="specialPrice priceCentre">
                <span>Special:
                <p>$22.50</span>
              </div>
            </div>
          </div>
          <div class="first3 first">
            <h3>First Class Child</h3>
            <div class="priceDiv">
              <div class="standardPrice priceCentre">
                <span>Standard:
                <p>$24.00</span>
              </div>
              <div class="specialPrice priceCentre">
                <span>Special:
                <p>$21.00</span>
              </div>
            </div>
          </div>
        </div>
      </article>

      <article class="article" id="nowShowing">
        <div class="articleContainer">
          <h1>Now Showing</h1>
          <div class="posterContainer">
            <div class="avengers postCard">
              <img class="poster" src="../../media/avengers.png">
              <div class="posterText">
                <div class="posterTitles">
                  <h3>Avengers: Endgame</h3><h4>PG</h4>
                </div>
                <div class="timesList">
                  <ul>
                    <li>Wednesday - 9pm</li>
                    <li>Thursday - 9pm</li>
                    <li>Friday - 9pm</li>
                    <li>Saturday - 6pm</li>
                    <li>Sunday - 6pm</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tEW postCard">
              <img class="poster" src="../../media/topEndWedding.png">
              <div class="posterText">
                <div class="posterTitles">
                  <h3>Top End Wedding</h3><h4>M</h4>
                </div>
                <div class="timesList">
                  <ul>
                    <li>Wednesday - 9pm</li>
                    <li>Thursday - 9pm</li>
                    <li>Friday - 9pm</li>
                    <li>Saturday - 6pm</li>
                    <li>Sunday - 6pm</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="dumbo postCard">
              <img class="poster" src="../../media/dumbo.png">
              <div class="posterText">
                <div class="posterTitles">
                  <h3>Dumbo</h3><h4>G</h4>
                </div>
                <div class="timesList">
                  <ul>
                    <li>Wednesday - 9pm</li>
                    <li>Thursday - 9pm</li>
                    <li>Friday - 9pm</li>
                    <li>Saturday - 6pm</li>
                    <li>Sunday - 6pm</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tHP postCard">
              <img class="poster" src="../../media/theHappyPrince.png">
              <div class="posterText">
                <div class="posterTitles">
                  <h3>The Happy Prince</h3><h4>R18+</h4>
                </div>
                <div class="timesList">
                  <ul>
                    <li>Wednesday - 9pm</li>
                    <li>Thursday - 9pm</li>
                    <li>Friday - 9pm</li>
                    <li>Saturday - 6pm</li>
                    <li>Sunday - 6pm</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="synopsisContainer">
            <div top>
              <div left 1/2>
                <div top>
                  Avengers: Endgame     PG
                </div>
                <div bottom>
                  After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.
                </div>
              </div>
              <div right 1/2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div bottom>
              <div left 1/3>
                Make A Booking
              </div>
              <div right 2/3>
                <button>Wednesday 9pm</button><button>Thursday 9pm</button><button>Friday 9pm</button>
                <button>Saturday 6pm</button><button>Sunday 6pm</button>
              </div>
            </div>
          </div>
        </div>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Guy Witherow s3783428, Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
