function loadSidebar() {
    fetch('sidebar.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('sidebar-container').innerHTML = data;
        })
        .catch(error => console.error('Error loading sidebar:', error));
}

window.onload = loadSidebar;


    document.querySelector('[name="nom_service"]').addEventListener('change', function() {
        var serviceName = this.value;


        var idService = {
            'service1': 1,
            'service2': 2
       
        };

        document.getElementById('id_service').value = idService[serviceName] || '';
    });