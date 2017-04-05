<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function makeCoffee($type) {
  if ($type == 'napoleon') {
    $valid = true;
    $description = 'A Napoleon is a wondrous combination of puff pratry, custard and whipped cream that is the perfect mix of crunchy and creamy.';
  } else if ($type == 'tirimisu') {
    $valid = true;
    $description = 'Tirimisu is a delight for those who love coffee and cake. It has layers of lady fingers coated in a whipped mascarpone custard and topped with cocoa powder. Mmmhh mmhhh good.';
  } else if ($type == 'ice cream') {
    $valid = true;
    $description = 'The most basic of desserts, ice cream is a necessity for anyone with a sweet tooth, especially if it&rsquo;s a hot day. Iit&rsquo;s frozen and delicious. ';
  } else if ($type == 'espresso') {
    $valid = true;
    $description = 'Highly concentrated Italian coffee served in a single standard shot.';
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? Gross!</strong> Enter something good next time.</p>
      </div>
    ');
  }
}
