class PopOutMsg {
  #targetId;
  #message;

  constructor(targetId, message) {
    this.#targetId = targetId
    this.#message = message;
  }

  toggleHover() {
    let element = document.querySelector(`#${this.#targetId}`);
    let explaination = document.querySelector("#explaination");
    element.addEventListener('mouseover', () => {
      explaination.textContent = this.#message;
    });
    element.addEventListener('mouseout', () => {
      explaination.textContent = ``;
    });

  }
}
let messages = [
  { targetId: 'logo', msg: 'I used this logo as the basis for my idea and design' },
  { targetId: 'toTop', msg: 'this was made with pure css' },
];
messages.forEach((msgObj) => {
  let popoutmsg = new PopOutMsg(msgObj.targetId, msgObj.msg);
  popoutmsg.toggleHover();
})




let duaneExplain = document.querySelector("#duaneExplain");

let header = document.querySelector('#header');
let logo = document.querySelector('#logo');
let sec2 = document.querySelector('#sec-2');
let sec3 = document.querySelector('#sec-3');


window.addEventListener("scroll", (e) => {
  let sec2TopPos = sec2.getBoundingClientRect(); //this it KEY****
  console.log(sec2TopPos.top)
  if (sec2TopPos.top <= 454) {//<--- threshhold
    // displays messenger once scrool in moved beyond threshold
    duaneExplain.setAttribute('style', 'display:block');
  } 
})