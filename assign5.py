import os
import sys
import re

# Function to read the template file
def read_template(template_path):
    with open(template_path, 'r') as template_file:
        return template_file.read()

# Function to replace placeholders in the template with actual data
def instantiate_template(template, data):
    for key, value in data.items():  # Changed from iteritems() to items()
        template = template.replace('<<{}>>'.format(key), str(value))
    return template

# Function to save the instantiated templates to the output directory
def save_to_output(output_directory, file_name, content):
    if not os.path.exists(output_directory):
        os.makedirs(output_directory)
    output_path = os.path.join(output_directory, file_name)
    with open(output_path, 'w') as output_file:
        output_file.write(content)

# Function to generate letters for each apartment with a balance greater than 0
def generate_letters(data_directory, template, date, output_directory):
    for filename in os.listdir(data_directory):
        if filename.endswith('.apt'):
            with open(os.path.join(data_directory, filename), 'r') as data_file:
                lines = data_file.readlines()
                first_name, last_name = lines[0].split(None, 1)
                lease_start, lease_end = lines[1].split()
                balance = int(lines[2].strip())
                if balance > 0:
                    data = {
                        'first_name': first_name.strip(),
                        'last_name': last_name.strip(),
                        'lease_start': lease_start,
                        'lease_end': lease_end,
                        'balance': balance,
                        'apt_number': filename.split('.')[0],
                        'date': date
                    }
                    content = instantiate_template(template, data)
                    # Sanitize the last name to create a valid filename
                    sanitized_last_name = re.sub(r'[^\w]', '', last_name.replace(' ', '_'))
                    output_filename = '{}.mail'.format(sanitized_last_name.lower())
                    save_to_output(output_directory, output_filename, content)

# Main function
def main():
    if len(sys.argv) != 5:
        print("Usage: python assign5.py data_directory template_file date output_directory")
        sys.exit(1)

    data_directory = sys.argv[1]
    template_file = sys.argv[2]
    date = sys.argv[3]
    output_directory = sys.argv[4]
    template = read_template(template_file)
    generate_letters(data_directory, template, date, output_directory)

if __name__ == '__main__':
    main()

