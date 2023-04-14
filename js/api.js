fetch("http://localhost:3000/api/games/top")
  .then((response) => response.json())
  .then((data) => {
  console.log(data)
})

