<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Fungame cards" />
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="assets/css/v-grid.css" />
  <title>Fungame</title>
</head>

<body>

  <!-- Site Header -->
  <header class="site-header">
    <h1 class="site-logo">Fungame</h1>
  </header>

  <!-- Site Main -->
  <main class="deck-container">
    <!-- Deck 1 -->
    <div class="deck deck-first" x-data="{ deck }">
      <template x-for="card in deck" :key="card.id">
        <div class="card">
          <div class="card__inner">
            <p class="card__question" x-text="card.question"></p>
            <small class="card__id" x-text="card.id"></small>
          </div>
        </div>
      </template>
    </div>
    <!-- Deck 2 -->
    <div class="deck deck-last" x-data="{ deck }">
      <template x-for="card in deck" :key="card.id">
        <div class="card">
          <div class="card__inner">
            <p class="card__question" x-text="card.question"></p>
            <small class="card__id" x-text="card.id"></small>
          </div>
        </div>
      </template>
    </div>
  </main>

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
    },
    {
      "id": 11,
      "question": "Describe your ideal day."
    }
  ];
</script>

<script src="assets/js/alpinejs@3.x.x.min.js"></script>

</html>