const labels = document.querySelectorAll('.row label')

labels.forEach(label => {
    label.innerHTML = label.innerText
        .split('')
        .map((letter, idx) => `<span style='transition-delay:${idx *30}ms'>${letter}</span>`)
        .join('')
    
})