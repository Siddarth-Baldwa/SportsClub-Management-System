</div>
</body>

</html>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.querySelector('#user-menu')
        const dropdown = document.querySelector('#dropdown')

        menuBtn.addEventListener('click', () => {
            /* if(dropdown.classList.contains('hidden')){
                dropdown.classList.remove('hidden');
                dropdown.classList.add('flex');
            }else{
                dropdown.classList.remove('flex')
                dropdown.classList.add('hidden')
            } */

            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
        })

    })
</script>