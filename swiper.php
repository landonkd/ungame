<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Ungame cards" />
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/v-swiper.css" />
  <!-- <script type="module" src="assets/js/data.js"></script> -->

  <title>Ungame</title>

</head>

<body>

  <header class="site-header">
    <h1>
      <svg class="site-logo" role="img" aria-labelledby="ungame-nameplage" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 25">
        <title id="ungame-nameplate">Ungame</title>
        <path d="M17.466 14.496c0 1.408-.192 2.699-.576 3.872-.363 1.173-.907 2.187-1.632 3.04-.704.832-1.59 1.483-2.656 1.952-1.067.448-2.304.661-3.712.64h-.032c-1.557.021-2.88-.224-3.968-.736s-1.973-1.205-2.656-2.08A8.978 8.978 0 0 1 .73 18.112a14.353 14.353 0 0 1-.448-3.616V.16h5.536v13.92c0 .576.053 1.12.16 1.632.128.512.32.96.576 1.344.256.384.576.693.96.928.384.213.843.32 1.376.32.533 0 .992-.107 1.376-.32.384-.235.693-.544.928-.928a3.79 3.79 0 0 0 .544-1.344 6.71 6.71 0 0 0 .192-1.632V.16h5.536v14.336ZM31.434.192h5.696V24h-5.44l-6.4-11.712V24h-5.695V.192h5.472l6.367 11.68V.192Zm24.689 19.392a11.78 11.78 0 0 1-1.472 1.696 9.671 9.671 0 0 1-1.888 1.408c-.683.405-1.44.736-2.272.992a9.62 9.62 0 0 1-2.624.352h-.032c-1.43 0-2.688-.235-3.776-.704-1.088-.47-2.005-1.12-2.752-1.952-.725-.832-1.29-1.824-1.696-2.976-.405-1.152-.63-2.41-.672-3.776V9.696c0-1.28.192-2.496.576-3.648.384-1.152.95-2.155 1.696-3.008.747-.875 1.675-1.568 2.784-2.08 1.11-.512 2.39-.768 3.84-.768h.032c1.45.064 2.624.32 3.52.768.917.427 1.643.928 2.176 1.504.555.576.97 1.152 1.248 1.728.277.576.523 1.024.736 1.344l-4.416 2.912a24.409 24.409 0 0 0-.384-.8 2.657 2.657 0 0 0-.576-.832 2.833 2.833 0 0 0-.896-.64c-.363-.192-.821-.288-1.376-.288-1.067 0-1.92.363-2.56 1.088-.619.704-.928 1.643-.928 2.816v4.64c0 .576.096 1.12.288 1.632.192.49.448.917.768 1.28.341.341.736.619 1.184.832.448.213.939.32 1.472.32.747.021 1.344-.107 1.792-.384.47-.277.821-.63 1.056-1.056v-1.184h-2.528v-4.608h7.68v8.32ZM71.705 24l-2.144-6.272h-4.64L62.809 24h-6.112L63.673.192h7.168L77.817 24h-6.112ZM99.736.192V24H94.04v-8.32L91.128 24h-3.456l-2.976-8.576V24H79V.192h5.472L89.4 14.016 94.36.192h5.376Zm16.887 5.376h-9.216v3.84h6.784v5.376h-6.784v3.84h9.216V24h-14.592V.192h14.592v5.376Z" fill="#FFF7E8"/>
      </svg>
    </h1>
  </header>

  
  <section x-data="{ deck }" class="deck">
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <template x-for="card in deck" :key="card.id">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="swiper-slide__inner">
              <p x-text="card.question" class="question"></p>
              <small x-text="card.id" class="question-id"></small>
            </div>
          </div>
        </template>
      </div>

      <!-- If we need pagination -->
      <!-- <div class="swiper-pagination"></div> -->

      <!-- If we need navigation buttons -->
      <!-- <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div> -->

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->

    </div><!-- .swiper -->
  </section>

</body>


<script>
  const deck = [
    {
      "id": 1,
      "question": "What family holiday experience has left pleasant memories?"
    },
    {
      "id": 2,
      "question": "What job would you never do and why?"
    },
    {
      "id": 3,
      "question": "Talk about a funny school experience."
    },
    {
      "id": 4,
      "question": "Talk about a mistake you made recently."
    },
    {
      "id": 5,
      "question": "What have you done in the past three months that makes you feel proud?"
    },
    {
      "id": 6,
      "question": "Talk about a time when you really had fun with your family."
    },
    {
      "id": 7,
      "question": "What do you like best about your appearance? Why?"
    },
    {
      "id": 8,
      "question": "Share a time when you were really frightened."
    },
    {
      "id": 9,
      "question": "Share a time when you felt lonely."
    },
    {
      "id": 10,
      "question": "Complete the statement: If your family inherited a million dollars, I would like for us to..."
    }
  ];
</script>

<script src="assets/js/alpinejs@3.x.x.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script blocking="render" async src="assets/js/main.js"></script>

</html>