    function showUpdateContentById($id, $action){
        
        var contentBoxElement = document.getElementsByClassName('viewcontent'+$id);
        var updateBoxElement = document.getElementsByClassName('updatecontent'+$id);
        var contentAction = "none";
        var updateAction = "table-cell";
        if($action == 'close') {
            contentAction = "table-cell";
            updateAction = "none";
        }
        for($i=0; $i<contentBoxElement.length; $i++){
            contentBoxElement[$i].style.display = contentAction;
        }
        for($i=0; $i<updateBoxElement.length; $i++){
            updateBoxElement[$i].style.display = updateAction;
        }
    }

    function unuseFoodieByFoodieId($foodieId, $isRecommend){
        if(!$isRecommend){
            if(confirm("Do you want to delete it?")){
                $.ajax({
                    url: "MANAGEFOODIE/unuseFoodieByFoodieId?foodieId="+$foodieId,
                    type: 'GET',
                    success: function() { 
                        alert("Delete successful"); 
                        window.location.reload();
                    },
                    error: function() { alert('Failed!'); },
                }); 
            } 
        }else{
            alert("Can not delete. Please uncheck recommend status");
        }
    }

    function unuseWorkoutByWorkoutId($workoutId){
        if(confirm("Do you want to delete it?")){
            $.ajax({
                url: "MANAGEWORKOUT/unuseWorkoutByWorkoutId?workoutId="+$workoutId,
                type: 'GET',
                success: function() { 
                    alert("Delete successful"); 
                    window.location.reload();
                },
                error: function() { alert('Failed!'); },
            }); 
        }
    }
    function unuseArticleByArticleId($articleId, $isHilight){
        if(!$isHilight){
            if(confirm("Do you want to delete it?")){
                $.ajax({
                    url: "MANAGEARTICLE/unuseArticleByArticleId?articleId="+$articleId,
                    type: 'GET',
                    success: function() { 
                        alert("Delete successful"); 
                        window.location.reload();
                    },
                    error: function() { alert('Failed!'); },
                }); 
            } 
        }else{
            alert("Can not delete. Please uncheck hilight status");
        }
    }
    
    function checkCanRecommend($recommendElement, $canRecommend){
        var countCheck = 0;
        $('input.isRecommend:checkbox:checked').each(function () {
            countCheck++;
        });
        if(countCheck > 4){
            alert("Cann't select recommend more than 4 items. Please edit recommend menu and save");
            $recommendElement.checked = false;
        }else if($recommendElement.checked == true){
            if($canRecommend == false){
                alert("Cann't select recommend more than 4 items. Please edit recommend menu and save");
                $recommendElement.checked = false;
            }
        }
    }

    function checkCanHilight($recommendElement, $canHilight){
        var countCheck = 0;
        $('input.isHilight:checkbox:checked').each(function () {
            countCheck++;
        });
        if(countCheck > 3){
            alert("Cann't select hilight more than 3 items. Please edit hilight article and save");
            $recommendElement.checked = false;
        }else if($recommendElement.checked == true){
            if($canHilight == false){
                alert("Cann't select hilight more than 3 items. Please edit hilight article and save");
                $recommendElement.checked = false;
            }
        }
    }

