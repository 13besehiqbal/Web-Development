function getPosition(element) {
			var xPosition = 0;
			var yPosition = 0;
  
			while(element) {
			xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
			yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
			element = element.offsetParent;
			}
			return { x: xPosition, y: yPosition };
			}

			var vari=setInterval(function(){
		             var enemy1 = document.getElementById("enemy1");
                     var myplane = document.getElementById("image1");
					 
					 var enemy1_box = { top: 0 ,bottom:0, left:0, right:0 };
					 var myplane_box = { top: 0 , bottom:0, left:0, right:0 };
					 
                     enemy1_box = enemy1.getBoundingClientRect();
					 myplane_box = myplane.getBoundingClientRect();
					 
					 if (enemy1_box.top > myplane_box.top && enemy1_box.bottom < myplane_box.bottom && enemy1_box.left < myplane_box.right && enemy1_box.left > myplane_box.left){
					 alert("Game Over");
					 }
					 
			},33);
			

            function leftArrowPressed() {
			
			var element = document.getElementById("image1");
			var position = getPosition(element);
			
			if(position.x > 0)
			element.style.left = parseInt(element.style.left) - 5 + 'px';
			
			
            }

            function rightArrowPressed() {
            var element = document.getElementById("image1");
			
			var position = getPosition(element);
			
			if(position.x < 600)
            element.style.left = parseInt(element.style.left) + 5 + 'px';

            }

            function upArrowPressed() {
            var element = document.getElementById("image1");
			var position = getPosition(element);
			
			if(position.y > 0)
            element.style.top = parseInt(element.style.top) - 5 + 'px';
            }

            function downArrowPressed() {
            var element = document.getElementById("image1");
			var position = getPosition(element);
			
			if(position.y < 430)
            element.style.top = parseInt(element.style.top) + 5 + 'px';
            }

            function moveSelection(evt) {
                switch (evt.keyCode) {
                    case 37:
                    leftArrowPressed();
                    break;
                    case 39:
                    rightArrowPressed();
                    break;
                    case 38:
                    upArrowPressed();
                    break;
                    case 40:
                    downArrowPressed();
                    break;
                    }
                };

        function docReady()
        {
          
          window.addEventListener('keydown', moveSelection);
		  
		  
        }
