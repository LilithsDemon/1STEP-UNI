const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle")
      frame = body.querySelector("#frame");

const sites = ["dashboard_home.php", "dashboard_edit.php", "dashboard_notifications.php", "dashboard_analytics.php", "index.php" ]

toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

function switchPanel(i)
{
    frame.setAttribute("src", sites[i]);

}