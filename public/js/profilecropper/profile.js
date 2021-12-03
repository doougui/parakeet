let el = document.querySelector('#cropper')
let banner = document.querySelector('#banner')
let avatar = document.querySelector('#avatar')
let preview = document.querySelector('#preview')
let modal = document.querySelector('#modal')
let profilefiles = document.querySelectorAll('.profilefiles')
let pcontainer = document.querySelector('#preview-container')

function showModal() {
    if(modal.classList.contains('hidden')) {
        modal.classList.remove('hidden')
        modal.classList.remove('fade-out-bck')
    } else {
        modal.classList.add('hidden')
        modal.classList.add('fade-out-bck')
    }
}

class Crop {
    createBanner() {
        this.vanilla = new Croppie(el, {
            viewport: { width: 300, height: 100 },
            boundary: { width: 300, height: 300 },
        })
        return this.vanilla
    }

    createAvatar() {
        this.vanilla = new Croppie(el, {
			viewport: {
				width: 300,
				height: 300,
				type: 'circle'
			},
			boundary: {
				width: 300,
				height: 300
			},
		})
        return this.vanilla
    }
}

profilefiles.forEach(function(element) {
    element.addEventListener('change', () => {
    showModal()

    // croppie instance
    const [file] = element.files   

    let vanilla
    let teste = new Crop

    if(element.id == 'banner') {
        vanilla = teste.createBanner()
    } else {
        vanilla = teste.createAvatar()
    }

// set banner

document.querySelector('#show-result').addEventListener('click', ()=> {


    let res = result(vanilla, element)

    // result
    res.then(function(blob) {
    if(element.id == 'banner') {
        bimg.src = URL.createObjectURL(blob)
    } else {
        pcontainer.classList.remove('hidden')
        preview.src = URL.createObjectURL(blob)
    }

    // blob to image
    let bimage = new File([blob], "image",{
        type:"image/jpeg", lastModified:new Date().getTime()
    })
    let container = new DataTransfer()
    container.items.add(bimage)
    element.files = container.files

    // modal fade out
    modal.classList.add('fade-out-bck')
    setTimeout(() => {
        modal.classList.add('hidden')
    }, 500)
    
})})

vanilla.bind({
    url: URL.createObjectURL(file),
})

banner.addEventListener('click', ()=> {
    vanilla.destroy()})

avatar.addEventListener('click', ()=> {
    vanilla.destroy()})
});
});

async function result(vanilla, element) {
    let res
    if(element.id == 'banner'){
        res =  await vanilla.result({
        type: 'blob',
        size: {width: 1500, height: 500},
    })
    } else {
        res =  await vanilla.result({
            type: 'blob',
            size: {width: 200, height: 200},
        })
    }
    return res
}