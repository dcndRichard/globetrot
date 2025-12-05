//(POM - pop out message)
//1.-POM-- This class creates the popout messages to display in the messenger icon
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
    explaination.style.transition = 'max-height 1s ease-in-out';

    if (this.#targetId == "explaination") {//This is hover fuctionality for hovering over the messenger
      let duaneExplain = document.querySelector("#duaneExplain");
      duaneExplain.addEventListener('mouseover', () => {
        explaination.style.maxHeight = '500px';
        explaination.textContent = this.#message;
      })
      duaneExplain.addEventListener('mouseout', () => {
        explaination.style.maxHeight = '0px';
      })
    } else {//This is hover fuctionality for hovering over everthing else
      element.addEventListener('mouseover', () => {
        explaination.style.maxHeight = '500px';
        explaination.textContent = this.#message;
        
      });
      element.addEventListener('mouseout', () => {
        explaination.style.maxHeight = '0px';
      });
    }


  }
}
//2.-POM-- Messege repository for POM
let messages = [
  { targetId: 'logo', msg: 'I used this logo as the basis for my and design. I tend to do this when Im looking for a launching point to create.' },
  { targetId: 'toTop', msg: 'this was made with pure css' },
  { targetId: 'explaination', msg: 'Hello potential employeer. Here is where Duane explains his thought process.Just hover over certain elements of the page to read about it' },
  {targetId: 'hero-text', msg: 'I chose to use this background photo in this hero section because it immediately catches the users attention. I wanted to play off the colors in the generic logo in the header. Using a text shadow allowed for the text overlay to stand out from the background. I optimized to photo and brought it down to 1MB for its original 3.3MB.'},
];
//3.-POM-- Creates POM instances based on the repostory
messages.forEach((msgObj) => {
  let popoutmsg = new PopOutMsg(msgObj.targetId, msgObj.msg);
  popoutmsg.toggleHover();
})




//Scroll listener
window.addEventListener("scroll", (e) => {
  let duaneExplain = document.querySelector("#duaneExplain");
  let sec2 = document.querySelector('#sec-2');
  let sec2TopPos = sec2.getBoundingClientRect(); //this it KEY****

  // console.log(sec2TopPos.top)
  if (sec2TopPos.top <= 454) {//<--- threshhold
    // displays messenger once scrool in moved beyond threshold
    duaneExplain.setAttribute('style', 'display:block');
  } 
})