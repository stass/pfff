let rec parent_path_with_dotgit_opt subdir = 
  then Some subdir
    if parent = "."
    then None
    else parent_path_with_dotgit_opt parent

let parent_path_with_dotgit a = 
  Common.some (parent_path_with_dotgit_opt a)