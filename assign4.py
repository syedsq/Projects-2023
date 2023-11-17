import os
import shutil

def organize_files(source_directory):
    file_list = os.listdir(source_directory)
    for filename in file_list:
        if filename.startswith("proj") and filename.count('.') > 0:
            suffix = filename.split("proj")[1].split('.')[0]
            dest_dir = os.path.join(source_directory, "assignment{}".format(suffix))
        elif filename.startswith("proj"):
            dest_dir = os.path.join(source_directory, "assignment")
        else:
            dest_dir = os.path.join(source_directory, "misc")
        
        # Create the destination directory if it doesn't exist
        if not os.path.exists(dest_dir):
            os.makedirs(dest_dir)
        
        shutil.move(os.path.join(source_directory, filename), os.path.join(dest_dir, filename))

# Specify the source directory here
source_directory = "/home/pfh262/courses/cs3424/python" 

organize_files(source_directory)
## The original one i had made crashed and i lost it somewhere, this is my hasty redo before deadline#
