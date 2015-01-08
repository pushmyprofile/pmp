var r = new Circle(0, 0, 100, 300).addTo(stage); 
r.fill(color('#F8981D').darker());
r.animate('400ms', {
  x: 200,
  y: 200,
  width: 200
}); 

var text = new Text('Page Likes').addTo(stage).attr({
  fontFamily: 'Arial, sans-serif',
  fontSize: '20',
  textFillColor: 'white',
});

var pagelikes = new Text('+1001').addTo(stage).attr({
  fontFamily: 'Arial, sans-serif',
  fontSize: '40',
  textFillColor: 'white',
});


text.animate('400ms', {
  x: 150,
  y: 155,
  width: 200
});

pagelikes.animate('800ms', {
  x: 140,
  y: 195,
  width: 200
}); 
