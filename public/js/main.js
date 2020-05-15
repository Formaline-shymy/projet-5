// Initialize and add the map
function initMap() {
    //  location
    const loc = { lat: 50.293011 , lng: 2.781780 };
    // Centered map on location
    const map = new google.maps.Map(document.querySelector('.map'), {
      zoom: 15,
      center: loc
    });
    // The marker, positioned at location
    const marker = new google.maps.Marker({ position: loc, map: map });
  }
 


  