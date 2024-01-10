// function for Search Bar
  function filterProducts() {
    var searchQuery = document.querySelector('input[name="searchquery"]').value.toLowerCase();
    var productItems = document.querySelectorAll('.product-item');

    productItems.forEach(function(item) {
        var itemName = item.querySelector('.student-name').innerText.toLowerCase();
        var subject = item.querySelector('.requirement-details p:nth-child(1)').innerText.toLowerCase();
        var location = item.querySelector('.requirement-details p:nth-child(2)').innerText.toLowerCase();
        var note = item.querySelector('.requirement-details p:nth-child(3)').innerText.toLowerCase();

        if (itemName.includes(searchQuery) || subject.includes(searchQuery) || location.includes(searchQuery) || note.includes(searchQuery)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

  
function filterProducts() {
    var searchQuery = document.querySelector('input[name="searchquery"]').value.toLowerCase();
    var productItems = document.querySelectorAll('.product-item');

    productItems.forEach(function(item) {
        var itemName = item.querySelector('.student-name').innerText.toLowerCase();
        var subject = item.querySelector('.requirement-details p:nth-child(1)').innerText.toLowerCase();
        var location = item.querySelector('.requirement-details p:nth-child(2)').innerText.toLowerCase();
        var note = item.querySelector('.requirement-details p:nth-child(3)').innerText.toLowerCase();

        if (itemName.includes(searchQuery) || subject.includes(searchQuery) || location.includes(searchQuery) || note.includes(searchQuery)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}


function filterstudentNeeds(category) {
            const productItems = document.querySelectorAll('.product-item');

            productItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

// JavaScript for carousel functionality of items 
    let currentIndex = 0;

  function changeItem(n) {
    currentIndex += n;
    showItems();
  }

  function showItems() {
    const items = document.querySelector('.product-items');
    const totalItems = document.querySelectorAll('.product-item').length;
    currentIndex = (currentIndex + totalItems) % totalItems;
    const translateValue = -currentIndex * 270; // Adjust the value based on item width and margin

    items.style.transform = `translateX(${translateValue}px)`;
  }

  

  //function used in live sessions

    function OneToOneSession() {
        // Redirect to the one-to-one session page or perform any other necessary actions
            alert('Starting a one-to-one session...');
            window.location.href = 'https://meet.google.com/';
            
    }

    function joinLiveSession() {
            // Redirect to the join live session page or perform any other necessary actions
            alert('Joining the ongoing live session...');
            window.location.href = 'https://meet.google.com/';
            
    }

    // Functions for How it's Works

      // Call the function on page load
      window.addEventListener('load', hideContainer);

        function hideContainer() {
        const container = document.getElementById('forTeacherContent');
        if (container) {
          container.style.display = 'none';
        }
      }


    document.getElementById('forStudentBtn').addEventListener('click', function() {
    document.getElementById('forStudentContent').style.display = 'block';
    document.getElementById('forTeacherContent').style.display = 'none';
  });

  document.getElementById('forTeacherBtn').addEventListener('click', function() {
    document.getElementById('forTeacherContent').style.display = 'block';
    document.getElementById('forStudentContent').style.display = 'none';
  });


    // functions used in Recorded Session page

    // Sample data for Web Development videos
    const webDevVideosData = [
      { title: 'Introduction to HTML', category: 'Web Development' },
      { title: 'CSS Basics', category: 'Web Development' },
      { title: 'JavaScript Fundamentals', category: 'Web Development' },
    ];

    // Sample data for Data Science videos
    const dataScienceVideosData = [
      { title: 'Introduction to Data Science', category: 'Data Science' },
      { title: 'Python for Data Analysis', category: 'Data Science' },
      { title: 'Machine Learning Basics', category: 'Data Science' },
    ];

    // Function to populate the video list
    function populateVideoList(containerId, videos) {
      const container = document.getElementById(containerId);
      videos.forEach(video => {
        const li = document.createElement('li');
        li.classList.add('video-item');
        li.innerHTML = `
          <div class="video-title">${video.title}</div>
          <div class="video-category">${video.category}</div>
        `;
        container.appendChild(li);
      });
    }

    // Populate the Web Development videos
    populateVideoList('webDevVideos', webDevVideosData);

    // Populate the Data Science videos
    populateVideoList('dataScienceVideos', dataScienceVideosData);