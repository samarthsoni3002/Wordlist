function mainWorking() {
  createFile = (g) => {
    let a = document.createElement("a");
    a.href = window.URL.createObjectURL(new Blob([g], { type: "text/plain" }));
    a.download = "demo.txt";
    a.click();
  };

  randomLength = () => {
    let n = Math.floor(Math.random() * 11) + 2;
    return n;
  };

  generator = (str) => {
    if (str.length < 2) {
      return str;
    } else {
      let data = [];
      for (let i = 0; i < str.length; i++) {
        let before = str.slice(0, i);
        let focus = str[i];
        let after = str.slice(i + 1, str.length + 1);
        let shortWord = before + after;
        let subData = generator(shortWord);
        for (let j = 0; j < subData.length; j++) {
          let newEntry = focus + subData[j];
          data.push(newEntry);
        }
      }
      return data;
    }
  };

  if (document.getElementById("radio1").checked) {
    let name = document.getElementById("first").value;
    console.log(name);

    if (name) {
      firstChoice(name);
    } else {
      alert("Input cannot be empty");
    }

    function firstChoice(name) {
      let g = generator(name);
      createFile(g);

      document.getElementById("write").innerHTML =
        "Wordlist has been downloaded\n Check the downloads tab.";
    }
  } else if (document.getElementById("radio2").checked) {
    let arr = document.getElementById("second").value;
    if (arr) {
      let l = arr.length;
      let i = 0;
      let a = arr.split(",");
      createFile(a);
      document.getElementById("write").innerHTML =
        "Wordlist has been downloaded\n Check the downloads tab.";
    } else {
      alert("Input cannot be empty");
    }
  } else {
    alert("Select one option");
  }
}
