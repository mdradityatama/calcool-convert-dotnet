</main>
    <footer class="container small d-flex justify-content-between pt-2 mt-5">
        <div>
            Copyright &copy; 2020 | Calcool
        </div>
        <div>
            @await Component.InvokeAsync("EnvironmentInfo")
            @await Component.InvokeAsync("ReleaseInfo")
        </div>
    </footer>
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/site.js" asp-append-version="true"></script>
</body>
</html>