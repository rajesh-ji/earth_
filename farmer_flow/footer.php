</div>
            
        </div>

    <!-- profile tab  -->
    <script>
        function profile() {
        location.replace("profile.php")
        }
        function center() {
        location.replace("farmerCenters.php")
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="../js/search.js"></script> -->

     <script type="text/javascript">
        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input = $(this).val();
                alert(input);
            });
        });
     </script>   
    
<script>
    var ctx = document.getElementById("lineChart").getContext('2d');
    //var ctx = document.getElementById('chart').getContext('2d');
                var gradient = ctx.createLinearGradient(0, 0, 0, 300);
                gradient.addColorStop(0, 'rgba(86, 189, 91, 1)');
                gradient.addColorStop(1, 'rgba(86, 189, 91, 0)');

                var grad = ctx.createLinearGradient(0, 0, 0, 300);
                grad.addColorStop(0, 'rgba(162, 209, 52, 1)');
                grad.addColorStop(1, 'rgba(162, 209, 52, 0)');

                var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                backgroundColor: gradient,
                borderColor: " #56BD5B",
                label: '',
                fill: true,
                data: [0, 100, 200, 300, 400, 500, 1330, 2210, 7830, 2478, 300, 400],
                },{
                backgroundColor: grad,
                borderColor: "#A7BF58",
                label: '',
                fill: true,
                data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100, 300, 400],
                }
                ]
                },

                options: {
                scales: {
                y: {
                beginAtZero: true
                }
                },
                tension: 0.3,
                legend: { display: false }
                }
                });
</script>
</body>
</html>