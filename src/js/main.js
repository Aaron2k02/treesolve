// change navbar style on scroll
window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 100)
})


// show/hide faq answer
const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open');

        //change icon
        const icon = faq.querySelector('.faq-icon i');
        if (icon.className === "uil uil-plus") {
            icon.className = "uil uil-minus";
        } else {
            icon.className = "uil uil-plus";
        }
    })
})

// show/hide nav menu
const menu = document.querySelector("nav-menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', () => {
    menu.style.display = 'flex';
    closeBtn.style.display = 'inline-block';
    menuBtn.style.display = 'none';
})

//close nav menu
const closeNav = () => {
    menu.style.display = 'none';
    closeBtn.style.display = 'none';
    menuBtn.style.display = 'inline-block';
}

closeBtn.addEventListener('click', closeNav)

//sort table function
// Get the table element
var table = document.getElementById("treeTable");

// Get the header cells
var headers = table.getElementsByTagName("th");

// Add click event listeners to each header cell
for (var i = 0; i < headers.length; i++) {
  headers[i].addEventListener("click", sortTable.bind(null, i));
}

// Function to sort the table based on the selected column
function sortTable(column) {
  var rows = table.rows;
  var switching = true;
  var shouldSwitch, x, y, shouldSwitchData;
  var dir = "asc"; // Set the default sorting order to ascending

  while (switching) {
    switching = false;

    for (var i = 1; i < rows.length - 1; i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("td")[column];
      y = rows[i + 1].getElementsByTagName("td")[column];

      // Check the data type of the column for proper sorting
      shouldSwitchData =
        isNaN(parseFloat(x.innerHTML)) || isNaN(parseFloat(y.innerHTML))
          ? x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()
          : parseFloat(x.innerHTML) > parseFloat(y.innerHTML);

      if (shouldSwitchData) {
        shouldSwitch = true;
        break;
      }
    }

    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }

    // Toggle the sorting order
    if (dir === "asc") {
      dir = "desc";
    } else {
      dir = "asc";
    }
  }
}
// TABLE SEARCH FUNCTION
function searchTrees() {
    var input, filter, table, tr, td, i, j, match;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    table = document.getElementById('treeTable');
    tr = table.getElementsByTagName('tr');
    var hasMatch = false;
  
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName('td');
      match = false;
  
      for (j = 0; j < td.length; j++) {
        if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
          match = true;
          break;
        }
      }
  
      if (match || tr[i].getElementsByTagName('th').length > 0) {
        tr[i].style.display = '';
        hasMatch = true;
      } else {
        tr[i].style.display = 'none';
      }
    }
  
    var thRows = table.getElementsByTagName('tr')[0];
    var thCells = thRows.getElementsByTagName('th');
    for (i = 0; i < thCells.length; i++) {
        thCells[i].style.width = '150px';
    }
  
    if (!hasMatch) {
      alert('NO MATCH');
    }
  }

  function sendMail() {
    event.preventDefault(); // Prevent form submission
  
    var params = {
      firstname: document.getElementById("First_Name").value,
      lastname: document.getElementById("Last_Name").value,
      title: document.getElementById("Title").value,
      email: document.getElementById("Email_Address").value,
      message: document.getElementById("Message").value,
    };
  
    emailjs.send("service_xc1x91o", "template_055qw39", params)
      .then(function(response) {
        console.log("Email sent successfully:", response);
        alert("Your message has been sent successfully.");
        document.getElementById("testimonialForm").reset(); // Reset the form
      })
      .catch(function(error) {
        console.error("Email sending failed:", error);
        alert("An error occurred while sending the email. Please try again.");
      });
  }
  

//   function sendMail() {
//     var params = {
//         firstname: document.getElementById("First_Name").value,
//         lastname: document.getElementById("Last_Name").value,
//         title: document.getElementById("Title").value,
//         email: document.getElementById("Email_Address").value,
//         message: document.getElementById("Message").value,
//     };

//     console.log("Form data:", params);

//     const serviceID = "service_xc1x91o";
//     const templateID = "template_055qw39";

//     emailjs.send(serviceID, templateID, params)
//         .then((res) => {
//             document.getElementById("First_Name").value = "";
//             document.getElementById("Last_Name").value = "";
//             document.getElementById("Title").value = "";
//             document.getElementById("Email_Address").value = "";
//             document.getElementById("Message").value = "";
//             console.log("Email sent:", res);
//             showMessage("Your message sent successfully");
//         })
//         .catch((err) => {
//             console.log(err);
//             showMessage("An error occurred while sending the message");
//         });
// }

// function showMessage(message) {
//     var messageContainer = document.getElementById("messageContainer");
//     messageContainer.textContent = message;
//     messageContainer.style.display = "block";
// }

// form+slider
// Wait for the document to be fully loaded
// document.addEventListener('DOMContentLoaded', function() {
//     // Select the testimonial slider element
//     var slider = document.getElementById('testimonial-slider');
  
//     // Select the testimonial form
//     var form = document.getElementById('testimonialForm');
  
//     // Add an event listener to the form submission
//     form.addEventListener('submit', function(event) {
//       event.preventDefault(); // Prevent the form from submitting normally
  
//       // Retrieve the submitted data from the form
//       var firstName = form.elements['First Name'].value;
//       var lastName = form.elements['Last Name'].value;
//       var title = form.elements['Title'].value;
//       var email = form.elements['Email Address'].value;
//       var message = form.elements['Message'].value;
  
//       // Generate the HTML markup for the new testimonial slide
//       var newTestimonialSlide = 
//         '<div class="avatar">' +
//         '<img src="res/YourImage.jpg" width="100" height="100">' +
//         '</div>' +
//         '<div class="testimonial_info">' +
//         '<h5>' + firstName + ' ' + lastName + '</h5>' +
//         '<small>' + title + '</small>' +
//         '</div>' +
//         '<div class="testimonial_body">' +
//         '<p>"' + message + '"</p>' +
//         '</div>';
  
//       // Insert the new testimonial slide into the slider
//       slider.insertAdjacentHTML('beforeend', newTestimonialSlide);
  
//       // Reset the form
//       form.reset();
//     });
//   });
  
  
  
  
  
  
  
  
    

  