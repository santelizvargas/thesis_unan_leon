const toggle = document.querySelector('.toggle'),
        sidebar = document.querySelector('.sidebar'),
    switchMode = document.querySelector('.switch'),
    body = document.querySelector('body')

toggle.addEventListener('click', () => {
    sidebar.classList.toggle('close')
})

switchMode.addEventListener('click', () => {
    body.classList.toggle('dark')
})

