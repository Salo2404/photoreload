function deletePhoto(photoId) {
    if (confirm("Удалить фото?")) {
        fetch(`delete_photos.php?id=${photoId}`)
            .then(() => {
                // console.log('Delete');
                window.location.reload();
            })
            .catch((error) => {
                alert("Произошла ошибка")
            }
            )
    };
}


function loadPhotos() {
    fetch('get_photos.php')
        .then(response => response.json())
        .then(data => {
            const gallery = document.getElementById('photo-gallery');

            gallery.innerHTML = '';

            data.forEach(photo => {
                const photoDiv = document.createElement('div');
                photoDiv.innerHTML = `
                <img src="uploads/${photo.photo_name}" width="200">
                <p>${photo.comment}</p>
                `
                photoDiv.innerHTML += `<button onclick='deletePhoto(${photo.id})' class='del'>Удалить</button> <hr>`

                gallery.appendChild(photoDiv);
            });
        });
}

loadPhotos();
