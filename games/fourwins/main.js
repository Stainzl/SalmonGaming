var player = 1;
var grid = [[0,0,0,0,0,-1],[0,0,0,0,0,-1],[0,0,0,0,0,-1],[0,0,0,0,0,-1],[0,0,0,0,0,-1],[0,0,0,0,0,-1],[0,0,0,0,0,-1]];
var victoryArray = [[0,0],[0,0],[0,0],[0,0],0];
var tf = true;
function loadfunction(){
    for(i=0; i<7; i++){
        setcolor(i, 5, "yellow");
    }
}
function setcolor(a, b, color){
    name = "a-b";
    name = name.replace("a", a);
    name = name.replace("b", b);
    document.getElementsByName(name)[0].setAttribute("bgcolor", color);
}
function clickfunction(a, b){
    if(grid[a][b] != -1){
        return 0;
    }
    if(player == 1){
        color = "red";
        player = 2;
    }else{
        color = "blue";
        player = 1;
    }
    setcolor(a, b, color);
    grid[a][b] = player;
    if(b!=0){
        grid[a][b-1]=-1;
        setcolor(a, b-1, "yellow");
    }
    if(checkVictory(grid)){
        victoryProcedure();
    }
}
function checkVictory(array){
    for(x=0; x<7; x++){
        for(y=0; y<6; y++){
            if(grid[x][y] == 1 || grid[x][y] == 2){
                sign = grid[x][y];
                if(x<4){
                    victory = true;
                    for(i=1; i<4; i++){
                        if(grid[x+i][y] != sign){
                            victory = false;
                            break;
                        }
                    }
                    if(victory){
                        console.log(sign);
                        victoryArray = [[x,y],[x+1,y],[x+2,y],[x+3,y],sign,false];
                        return true;
                    }
                }
                if(y<4){
                    victory = true;
                    for(i=1; i<4; i++){
                        if(grid[x][y+i] != sign){
                            victory = false;
                            break;
                        }
                    }
                    if(victory){
                        console.log(sign);
                        victoryArray = [[x,y],[x,y+1],[x,y+2],[x,y+3],sign,false];
                        return true;
                    }
                }
                if(x<4 && y<4){
                    victory = true;
                    for(i=1; i<4; i++){
                        if(grid[x+i][y+i] != sign){
                            victory = false;
                            break;
                        }
                    }
                    if(victory){
                        console.log(sign);
                        victoryArray = [[x,y],[x+1,y+1],[x+2,y+2],[x+3,y+3],sign,false];
                        return true;
                    }
                }
                if(x<4 && y>3){
                    victory = true;
                    for(i=1; i<4; i++){
                        if(grid[x+i][y-i] != sign){
                            victory = false;
                            break;
                        }
                    }
                    if(victory){
                        console.log(sign);
                        victoryArray = [[x,y],[x+1,y-1],[x+2,y-2],[x+3,y-3],sign,false];
                        return true;
                    }
                }
            }
        }
    }
    return false;
}
function victoryProcedure(){
    for(x=0; x<7; x++){
        for(y=0; y<6; y++){
            if(grid[x][y] == -1){
                grid[x][y] = 0;
                setcolor(x, y, "white");
            }
        }
    }
    setInterval(function(){
        if(victoryArray[4]==1){
            color = "blue";
        }else{
            color = "red";
        }
        if(tf){
            color = "#0f0";
            tf=false;
        }else{
            tf=true;
        }
        console.log(victoryArray[4]);
        setcolor(victoryArray[0][0], victoryArray[0][1], color);
        setcolor(victoryArray[1][0], victoryArray[1][1], color);
        setcolor(victoryArray[2][0], victoryArray[2][1], color);
        setcolor(victoryArray[3][0], victoryArray[3][1], color);
    }, 500);
}
function empty(){
    console.log("I do something now!");
}